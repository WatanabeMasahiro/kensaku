@include('kensaku.includes.home_head')

@include('kensaku.includes.home_header', ['page_title' => 'ホーム画面'])


<div class="content container-fluid">

  @foreach($userInfo as $info)
    @if ( $info->id == $user->id )
      <p id="userInfoCount" class="d-none">{{ $info->contents_count }}</p>
      @break
    @endif
  @endforeach

  <p class="text-muted ml-5">登録データ数：
    @foreach($userInfo as $info)
      @if ( $info->id == $user->id )
          {{ $info->contents_count }}
        @break
      @endif
    @endforeach
  </p>


  <div class="flashingWarning container-fluid d-sm-none mt-4">

    <div class="row">
      <div class="col-1"></div>
      @error('title')
        <div class="col w-75"><p class="bg-warning text-danger text-center">タイトルを入力して下さいっ！</p></div>
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

  <div class="flashingWarning container-fluid d-none d-sm-block mt-4">

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


  <p class="h4 mt-4 mb-4 text-center">登録するデータを入力して下さい。</p>

  <div class="row">
    <div class="col"></div>

    <form class="mx-2" action="/kensaku/touroku" method="post">
      <table class="table recordTable">
      @csrf
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <tr>
          <th class="text-center">タイトル</th>
          <td><input class="px-2 py-1" style="border:solid 2px gray;" type="text" name="title" value="{{old('title')}}"></td>
        </tr>
        <tr>
          <th class="text-center">内容</th>
          <td><textarea class="px-2 py-1" style="border:solid 2px gray;" name="text" rows="10" cols="40" value="{{old('text')}}"></textarea></td>
        </tr>
        <tr class="submit">
          <td class="text-center" colspan="2">
            <input id="confirmSub_touroku" class="btn btn-white text-white bg-secondary px-4" style="border: solid 3px rgba(0, 0, 0, 0.2); border-radius: 20px;" type="submit" value="送信">
          </td>
        </tr>
      </table>
    </form>

    <div class="col"></div>
  </div>


  <div class="my-5" aria-hidden="true"></div>

  <div class="text-center mb-4">
    <a class="d-inline-block btn btn-lg btn-info topReturn" role="button">TOPへ</a>
  </div>

  
</div>    <!-- class="content" -->

<hr>

@include('kensaku.includes.home_footer')