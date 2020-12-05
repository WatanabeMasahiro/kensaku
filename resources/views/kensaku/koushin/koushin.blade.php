@include('kensaku.includes.home_head')

@include('kensaku.includes.home_header', ['page_title' => 'ホーム画面'])


<div class="content container-fluid">


  <ul class="d-none">
      @foreach ( $userContents as $content)
      <li class="contentsIdNum">{{$content->id}}</li>
      @endforeach
  </ul>

  <div class="numExist d-none"></div>


  <div class="FlashingWarning container-fluid d-sm-none mt-5">

    <div class="row">
      <div class="col-1"></div>
      @error('title')
        <div class="col w-75"><p class="bg-warning text-danger text-center">テキストを入力して下さいっ！</p></div>
      @enderror
      <div class="col-1"></div>
    </div>

    <div class="row">
      <div class="col-1"></div>
      @error('text')
        <div class="col w-75"><p class="bg-warning text-danger text-center">内容を入力して下さいっ！</p></div>
      @enderror
      <div class="col-1"></div>
    </div>

</div>

<div class="FlashingWarning container-fluid d-none d-sm-block mt-5">

  <div class="row">
    <div class="col-2"></div>
    @error('title')
      <div class="col w-50"><p class="bg-warning text-danger text-center">テキストを入力して下さいっ！</p></div>
    @enderror
    <div class="col-2"></div>
  </div>

  <div class="row">
    <div class="col-2"></div>
    @error('text')
      <div class="col w-50"><p class="bg-warning text-danger text-center">内容を入力して下さいっ！</p></div>
    @enderror
    <div class="col-2"></div>
  </div>

</div>


  <p class="h4 mt-4 mb-4 text-center">データを編集し、送信ボタンを押してください。</p>


  <div id="secretContents" class="row">
    <div class="col"></div>

    <div class="mx-1">

      <form action="/kensaku/koushin" method="post">
        <table class="table recordTable">
        @csrf
          <input type="hidden" name="id" value="{{ $form->id }}">
          <div class="hensyu-naiyou">
            <tr>
              <th colspan="2" class="bg-info text-center h5"><b>編集内容</b></th>
            </tr>
            <tr>
              <th>タイトル</th>
              <td class="ds-blue"><input class="px-2 py-1" type="text" name="title" value="{{ $form->title }}"></td>
            </tr>
            <tr>
              <th class="text-center" style="border-bottom: solid 1px white;">内容</th>
              <td class="ds-blue"><textarea class="px-2 py-1" name="text" rows="10" cols="48">{{ $form->text }}</textarea></td>
            </tr>
          </div>

          <div class="hensyu-mae">
            <tr>
              <th colspan="2" id="hensyumae-title" class="bg-success text-center h5"  style="border-top: solid 5px rgba(0, 0, 0, 0.5); border-bottom: solid 5px rgba(0, 0, 0, 0.5); border-radius: 10px 10px 10px 10px;">
                <div class="float-left ml-1"><i class="fas fa-angle-double-down"></i></div>
                <b>編集前</b>
                <div class="float-right mr-1"><i class="fas fa-angle-double-down"></i></div>
              </th>
            </tr>
            <tr class="d-hide">
              <th>タイトル</th>
              <td class="green">
                <p class="px-2 py-1" style="background-color: lightblue; border-radius: 2px; max-width:410px;">{{ $form->title }}</p>
              </td>
            </tr>
            <tr class="d-hide">
              <th class="text-center" style="border-bottom: solid 5px rgba(0, 0, 0, 0.5); border-radius: 0 0 0 10px;">内容</th>
              <td class="green" style="border-bottom: solid 5px rgba(0, 0, 0, 0.5); border-radius: 0 0 10px 0;">
                <div class="px-2 py-1" style="background-color: lightblue; border-radius: 2px; white-space:pre-wrap; max-width:410px;">{{ $form->text }}</div>
              </td>
            </tr>
          </div>

          <div class="hensyu-submit">
            <tr>
              <td class="text-center" colspan="2">
                <input id="confirmSub_koushin" class="btn btn-white text-white bg-secondary px-4" style="border: solid 3px rgba(0, 0, 0, 0.2); border-radius: 20px;" type="submit" value="送信">
              </td>
            </tr>
          </div>
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