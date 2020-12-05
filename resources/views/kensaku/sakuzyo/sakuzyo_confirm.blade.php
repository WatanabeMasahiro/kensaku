@include('kensaku.includes.home_head')

@include('kensaku.includes.home_header', ['page_title' => 'ホーム画面'])


<div class="content container-fluid">


  <ul class="d-none">
      @foreach ( $userContents as $content)
      <li class="contentsIdNum">{{$content->id}}</li>
      @endforeach
  </ul>

  <div class="numExist d-none"></div>


  <p class="h4 mt-5 mb-4 text-center">削除するデータの、ID番号を入力して下さい。</p>


  <div class="row">
    <div class="col"></div>

    <form action="/kensaku/sakuzyo" method="get">
      <table class="table recordTable">
        <tr>
          <th class="text-center p-4">ID番号</th>
          <td class="p-4">
            <input id="k_conf_num" class="p-1 text-center" style="border:solid 2px gray;" type="number" name="id" value="{{old('id')}}">
          </td>
        </tr>
        <tr>
          <td class="text-center" colspan="2">
            <input id="k_conf_send" class="btn btn-white text-white bg-secondary px-4" style="border: solid 3px rgba(0, 0, 0, 0.2); border-radius: 20px;" type="submit" value="送信">
          </td>
        </tr>
      </table>
    </form>

    <div class="col"></div>
  </div>


  <div class="my-5" aria-hidden="true"></div>

</div>

<hr>

@include('kensaku.includes.home_footer')