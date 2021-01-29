<body>
  <div class="header">
    
    <div class="text-center">
      <h1 class="siteTitle mt-4"><a href="/kensaku/home1" style="text-decoration: none;"><b class="text-primary">ケンサクくん<i class="fas fa-search" style="transform: scale(-1, 1);"></i></b></a></h1>
    </div>

    <hr class="headerHr">

    <div class="row userName">
      <div class="col-4 col-sm-6"></div>
      <div class="col-7 col-sm-5 text-center">
        @if (Auth::check())
          <p class="text-muted userInfo d-flex align-items-start">　<i class="fa fa-user h4" aria-hidden="true"></i> 『　{{$user -> name}}　』さん　</p>
        @else
          <p class="text-muted userInfo d-flex align-items-start"><a href="/register">ユーザー登録</a></p>
        @endif
      </div>
      <div class="col-1 col-sm-1"></div>
    </div>

    <nav class="menuBar navbar navbar-expand-sm bg-warning d-print py-1">
        <a class="nb navbar-brand d-sm-none ml-5"><b>メニュー</b></a>
        <button class="menubarBtn navbar-toggler px-0" type="button" data-toggle="collapse" data-target="#switching" aria-controls="switching" aria-expanded="false" aria-label="ナビゲーション切り替え">
          <span class="bg-white px-2 py-1"><i class="fas fa-bars px-1 pr-2 mr-1" aria-hidden="true"></i></span>
        </button>
        <div class="menuOpens collapse navbar-collapse mt-2 text-center" id="switching">
          <ul class="navbar-nav w-100 nav-justified bg-info">
            <li class="nav-item">
              <a class="navContents nav-link pl-2 homes" style="border-radius: 5px; letter-spacing: 7px;" href="/kensaku/home1">ホーム</a>
            </li>
            <li class="nav-item">
              <a class="navContents nav-link" style="border-radius: 5px;" href="/kensaku/touroku">登　　録</a>
            </li>
            <li class="nav-item">
              <a class="navContents nav-link" style="border-radius: 5px;" href="/kensaku/koushin/confirm">更　　新</a>
            </li>
            <li class="nav-item">
              <a class="navContents nav-link" style="border-radius: 5px;" href="/kensaku/sakuzyo/confirm">削　　除</a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="row text-right mr-5 mt-1">

      <div class="col"></div>
      <div class="col"></div>
      
      <div class="col">
        <div class="d-sm-none logout-withdrawal">
          <a id="logout-link" class="logout-links float-left" href="{{ route('logout') }}">
            {{ __('ログアウト') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>

          <a href="/kensaku/taikai" class="float-right">退会</a>
        </div>


        <div class="d-none d-sm-block logout-withdrawal my-1">
          <a id="logout-link" class="logout-links" href="{{ route('logout') }}">
            {{ __('ログアウト') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>

          <a href="/kensaku/taikai" class="ml-3">退会</a>
        </div>
      </div>

    </div>

          <!-- <p>{{$page_title}}</p> -->
          <!-- @if (Auth::check())
          <p>こんにちは、『　{{$user ?? ''->name}}　』さん！！！</p>
          <p><a href="/home">ログアウト</a></p>
        @else
          <p>
            ※ログインしていません。        （ <a href="/login">ログイン</a> | <a href="/register">登録</a> ）
          </p>
        @endif -->

  </div>    <!-- class="header" -->

  <hr class="mt-1">