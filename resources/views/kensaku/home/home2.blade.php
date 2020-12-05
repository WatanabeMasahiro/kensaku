@include('kensaku.includes.home_head')

@include('kensaku.includes.home_header', ['page_title' => 'ホーム画面'])


<div class="content container-fluid">


  <div class="text-muted ml-5">登録データ数：
    <span class="regDatas">
      @foreach($userInfo as $info)
        @if ( $info->id == $user->id )
            {{ $info->contents_count }}
          @break
        @endif
      @endforeach
    </span>
  </div>


  @isset($search)

    @foreach( $userContents as $item )

      @php
        $convTitle = mb_convert_kana(strtolower($item->title), 'acHnrnsV');
        $convText = mb_convert_kana(strtolower($item->text), 'acHnrnsV');
        $convSearch = mb_convert_kana(strtolower($search), 'acHnrnsV');
      @endphp

      @unless ( strpos( $convTitle, "$convSearch" ) === false && strpos( $convText, "$convSearch" ) === false )

        @php
          ++$issetCount;
        @endphp

      @endunless

    @endforeach
 
      <div class="text-muted ml-5">検索データ数：
        <span class="issetCount">{{$issetCount}}</span>
      </div>
  @endisset


  @include('kensaku.includes.homeContents.searchBox', ['num' => '2'])


  <div class="searchConfirmTable">
    @isset($search)
      @foreach ( $userContents as $item )
        @php
          $convTitle = mb_convert_kana(strtolower($item->title), 'acHnrnsV');
          $convText = mb_convert_kana(strtolower($item->text), 'acHnrnsV');
          $convSearch = mb_convert_kana(strtolower($search), 'acHnrnsV');
        @endphp

        @unless ( strpos( $convTitle, "$convSearch" ) === false && strpos( $convText, "$convSearch" ) === false )
          <table id="existTable_B" class="d-none">
            <tr id="existRecord_B"><td>{{$item->id}}</td></tr>
          </table>
          @break
        @endunless

      @endforeach
    @endisset
  </div>


  @isset($search)
    <p id="existNone_p_B" class="text-center h4 mt-3 mb-5">検索文字：『　{{$search}}　』</p>
    <table id="recordTable_B" class="table table-hover recordTable">
      <tr>
        <th class="text-center">id番号</th>
        <th class="text-center">タイトル</th>
        <th class="text-center">内容</th>
      </tr>
      @foreach ( $userContents as $item )

        @php
          $convTitle = mb_convert_kana(strtolower($item->title), 'acHnrnsV');
          $convText = mb_convert_kana(strtolower($item->text), 'acHnrnsV');
          $convSearch = mb_convert_kana(strtolower($search), 'acHnrnsV');
        @endphp

        @unless ( strpos( $convTitle, "$convSearch" ) === false && strpos( $convText, "$convSearch" ) === false )
          @php
            ++$count;
          @endphp
          @if ( $count <= 20 )
            @continue;
          @endif
          <tr class="table-secondary recordData">
            <td class="id-td text-center">　<a class="syousaiLink" style="text-decoration: none;">{{$item->id}}</a>　</td>
            <td>　{{Str::limit( $item->title, 20 )}}　</td>
            <td>　{{Str::limit( $item->text, 50 )}}　</td>
          </tr>
        @endunless
        @if ( $count == 40 )
          @break;
        @endif
      @endforeach
    </table>
  @endisset

  @if(!isset($search))
    <p class="text-center h4 mt-3 mb-5">登録データ一覧</p>
    <table class="table table-hover recordTable">
      <tr>
        <th class="text-center">id番号</th>
        <th class="text-center">タイトル</th>
        <th class="text-center">内容</th>
      </tr>
      @foreach ($userContents as $item)
        @php
          ++$count;
        @endphp
        @if ( $count <= 20 )
          @continue;
        @endif
        <tr class="table-secondary recordData">
          <td class="id-td text-center">　<a class="syousaiLink" style="text-decoration: none;">{{$item->id}}</a>　</td>
          <td>　{{Str::limit( $item->title, 20 )}}　</td>
          <td>　{{Str::limit( $item->text, 50 )}}　</td>
        </tr>
        @if ( $count == 40 )
          @break;
        @endif
      @endforeach
    </table>
  @endif

  <div class="my-5"></div>

  <nav class="d-sm-none" aria-label="ページネーション">
    <ul class="paginationBar pagination pagination-lg justify-content-center">
      <li class="page-item"><a class="paginate1 page-link" href="/kensaku/home1">&laquo;</a></li>
      <li class="page-item"><a class="paginate1 page-link" href="/kensaku/home1">1</a></li>
      <li class="page-item active"><a class="paginate2 page-link" href="/kensaku/home2">2</a></li>
      <li class="page-item"><a class="paginate3 page-link" href="/kensaku/home3">3</a></li>
      <li class="page-item"><a class="paginate4 page-link" href="/kensaku/home4">4</a></li>
      <li class="page-item"><a class="paginate5 page-link" href="/kensaku/home5">5</a></li>
      <li class="page-item"><a class="paginate3 page-link" href="/kensaku/home3">&raquo;</a></li>
    </ul>
  </nav>

  <nav class="d-none d-sm-block" aria-label="ページネーション">
    <ul class="paginationBar pagination justify-content-center">
      <li class="page-item"><a class="paginate1 page-link" href="/kensaku/home1">&laquo;</a></li>
      <li class="page-item"><a class="paginate1 page-link" href="/kensaku/home1">1</a></li>
      <li class="page-item active"><a class="paginate2 page-link" href="/kensaku/home2">2</a></li>
      <li class="page-item"><a class="paginate3 page-link" href="/kensaku/home3">3</a></li>
      <li class="page-item"><a class="paginate4 page-link" href="/kensaku/home4">4</a></li>
      <li class="page-item"><a class="paginate5 page-link" href="/kensaku/home5">5</a></li>
      <li class="page-item"><a class="paginate3 page-link" href="/kensaku/home3">&raquo;</a></li>
    </ul>
  </nav>

  <div class="my-5"></div>

  <div class="text-center mb-4">
    <a class="d-inline-block btn btn-lg btn-info topReturn" role="button">TOPへ</a>
  </div>

</div>    <!-- class="content" -->

<hr>

@include('kensaku.includes.home_footer')