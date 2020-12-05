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

      <div class="issetCount_div text-muted ml-5">検索データ数：
        <span class="issetCount">{{$issetCount}}</span>
      </div>
  @endisset


  @include('kensaku.includes.homeContents.searchBox', ['num' => '1'])


  @isset($search)

    <p id="existNone_p_A" class="text-center h4 mt-3 mb-5">検索文字：『　{{$search}}　』</p>
    <table id="existTable_A" class="table table-hover recordTable">
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
          <tr id="existRecord_A" class="table-secondary recordData">
            <td class="text-center">　<a class="syousaiLink" style="text-decoration: none;">{{$item->id}}</a>　</td>
            <td>　{{Str::limit( $item->title, 20 )}}　</td>
            <td>　{{Str::limit( $item->text, 50 )}}　</td>
          </tr>

          @php
            ++$count;
          @endphp

        @endunless

        @if ( $count == 20 )
          @break;
        @endif

      @endforeach
    </table>
  @endisset

  @if(!isset($search))
    <p class="noset-p text-center h4 mt-3 mb-5">登録データ一覧</p>
    <table class="noset-table table table-hover recordTable">
      <tr>
        <th class="text-center">id番号</th>
        <th class="text-center">タイトル</th>
        <th class="text-center">内容</th>
      </tr>
      @foreach ($userContents as $item)
        <tr class="table-secondary recordData">
          <td class="text-center">　<a class="syousaiLink" style="text-decoration: none;">{{$item->id}}</a>　</td>
          <td>　{{Str::limit( $item->title, 20 )}}　</td>
          <td>　{{Str::limit( $item->text, 50 )}}　</td>
        </tr>
        @php
          ++$count;
        @endphp
        @if ( $count == 20 )
          @break;
        @endif
      @endforeach
    </table>
  @endif

  <div class="my-5" aria-hidden="true"></div>

  <nav class="d-sm-none" aria-label="ページネーション">
    <ul class="paginationBar pagination pagination-lg justify-content-center">
      <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
      <li class="page-item active"><a class="paginate1 page-link" href="/kensaku/home1">1</a></li>
      <li class="page-item"><a class="paginate2 page-link" href="/kensaku/home2">2</a></li>
      <li class="page-item"><a class="paginate3 page-link" href="/kensaku/home3">3</a></li>
      <li class="page-item"><a class="paginate4 page-link" href="/kensaku/home4">4</a></li>
      <li class="page-item"><a class="paginate5 page-link" href="/kensaku/home5">5</a></li>
      <li class="page-item"><a class="paginate2 page-link" href="/kensaku/home2">&raquo;</a></li>
    </ul>
  </nav>

  <nav class="d-none d-sm-block" aria-label="ページネーション">
    <ul class="paginationBar pagination justify-content-center">
      <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
      <li class="page-item active"><a class="paginate1 page-link" href="/kensaku/home1">1</a></li>
      <li class="page-item"><a class="paginate2 page-link" href="/kensaku/home2">2</a></li>
      <li class="page-item"><a class="paginate3 page-link" href="/kensaku/home3">3</a></li>
      <li class="page-item"><a class="paginate4 page-link" href="/kensaku/home4">4</a></li>
      <li class="page-item"><a class="paginate5 page-link" href="/kensaku/home5">5</a></li>
      <li class="page-item"><a class="paginate2 page-link" href="/kensaku/home2">&raquo;</a></li>
    </ul>
  </nav>

  <div class="my-5" aria-hidden="true"></div>

  <div class="text-center mb-4">
    <a class="d-inline-block btn btn-lg btn-info topReturn" role="button">TOPへ</a>
  </div>


</div>    <!-- class="content" -->

<hr>

@include('kensaku.includes.home_footer')