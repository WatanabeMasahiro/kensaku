@include('kensaku.includes.home_head')

@include('kensaku.includes.home_header', ['page_title' => 'ホーム画面'])


<div class="content container-fluid">


  <ul class="d-none">
      @foreach ( $userContents as $content)
      <li class="contentsIdNum">{{$content->id}}</li>
      @endforeach
  </ul>

  <div class="numExist d-none"></div>


  <p class="subT h4 mt-5 mb-4 text-center">以下のデータを削除しますか？</p>


  <div id="secretContents" class="row">
    <div class="col"></div>

    <div class="mx-1">
      <form action="/kensaku/sakuzyo" method="post">
        <table class="table recordTable text-center">
        @csrf
          <input type="hidden" name="id" value="{{ $form->id }}">
          <tr><th>タイトル</th></tr>
          <tr><td><p class="py-1 mt-1 mb-0" style="background-color: lightblue; border-radius: 2px;">{{ $form->title }}</p></td></tr>
          <tr><th>内容</th></tr>
          <tr><td><div class="text-left pt-2 px-2 pb-4 my-2" style="background-color: lightblue; border-radius: 2px; white-space:pre-wrap;">{{ $form->text }}</div></td></tr>
          <tr class="submit">
            <td>
              <input id="confirmSub_sakuzyo" class="btn btn-white text-white bg-secondary px-4" style="border: solid 3px rgba(0, 0, 0, 0.2); border-radius: 20px;" type="submit" value="送信">
            </td>
          </tr>
        </table>
      </form>
    </div>

    <div class="col"></div>
  </div>


  <div class="my-5" aria-hidden="true"></div>

  <div class="text-center mb-4">
    <a class="d-inline-block btn btn-lg btn-info topReturn" role="button">TOPへ</a>
  </div>

</div>

<hr>

@include('kensaku.includes.home_footer')