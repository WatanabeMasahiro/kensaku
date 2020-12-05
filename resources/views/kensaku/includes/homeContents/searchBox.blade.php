<div class="container searchForm">
  <div class="row">
    <div class="col"></div>
    <div class="formSearch col text-center">
      <form class="d-inline-block mt-2" id="formGet" action="/kensaku/home{{$num}}" method="get">
        <table class="table table-sm searchTable">
          <tr>
            <td><input id="searchBox" type="text" name="search" value="{{old('search')}}{{$search}}"></td>
            <td><input id="formSubmit" type="submit" value="検索"></td>
          </tr>
        </table>
      </form>
    </div>
    <div class="col"></div>
  </div>
</div>