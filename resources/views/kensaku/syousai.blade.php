@include('kensaku.includes.home_head')

@include('kensaku.includes.home_header', ['page_title' => 'ホーム画面'])


<div class="content container-fluid">


  <ul class="d-none">
      @foreach ( $userContents as $content)
      <li class="contentsIdNum">{{$content->id}}</li>
      @endforeach
  </ul>

  <div class="numExist d-none"></div>


  <div id="secretContents" class="row">

    <div class="col"></div>
    <div class="col-auto">
      <p class="idNumTitle bg-success h4 py-1 mt-5 mb-4 text-center" style="width: 250px;">ID番号：{{ $selectUserContent['id'] }}</p>
    </div>
    <div class="col"></div>

  </div>


  <div class="row ">
    <div class="col"></div>

    <div class="col-auto d-sm-none w-100">
      <table class="table recordTable text-center">
        <tr>
          <th class="h4"  colspan="2"><b>タイトル</b></th>
        </tr>
        <tr>
          <td colspan="2" style="background-color: #ffebcd;"><p class="py-2 mt-3 mb-2" style="background-color: lightblue; border-radius: 2px;">{{ $selectUserContent['title'] }}</p></td>
        </tr>
        <tr>
          <th class="h4" colspan="2"><b>内　容</b></th>
        </tr>
        <tr>
          <td colspan="2" style="background-color: #ffebcd;">
            <div class="text-left p-2 mt-4 mb-2" style="background-color: lightblue; border-radius: 2px; white-space:pre-wrap;">{{ $selectUserContent['text'] }}</div>
          </td>
        </tr>
        <tr>
          <th>更新日：{{ $selectUserContent['updated_at'] }}</th>
          <th>登録日：{{ $selectUserContent['created_at'] }}</th>
        </tr>
      </table>
    </div>


    <div class="col-auto d-none d-sm-block w-75">
      <table class="table recordTable text-center">
        <tr>
          <th class="h4"  colspan="2"><b>タイトル</b></th>
        </tr>
        <tr>
          <td colspan="2" style="background-color: #ffebcd;"><p class="py-2 mt-3 mb-2" style="background-color: lightblue; border-radius: 2px;">{{ $selectUserContent['title'] }}</p></td>
        </tr>
        <tr>
          <th class="h4" colspan="2"><b>内　容</b></th>
        </tr>
        <tr>
          <td colspan="2" style="background-color: #ffebcd;">
            <div class="text-left p-2 mt-4 mb-2" style="background-color: lightblue; border-radius: 2px; white-space:pre-wrap;">{{ $selectUserContent['text'] }}</div>
          </td>
        </tr>
        <tr>
          <th>更新日：{{ $selectUserContent['updated_at'] }}</th>
          <th>登録日：{{ $selectUserContent['created_at'] }}</th>
        </tr>
      </table>
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