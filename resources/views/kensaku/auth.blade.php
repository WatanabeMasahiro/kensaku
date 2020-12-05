<html>
  <head>
    <title>ケンサクくん</title>
    <style>
      th {background-color:gray;}
      td {background-color:silver;}
      .headtitle {font-size: 10pt; color:gray;}
    </style>
  </head>
  <body>
    <div class="header">
      <h1>ケンサクくん</h1>
      <hr>
      <p>ここはヘッダー　ここはヘッダー　ここはヘッダー</p>
      <p class="headTitle">ユーザー認証</p>
      <br/>
    </div>

    <hr>

    <div class="content">
      <p>{{$message}}</p>
      <form action="/kensaku/auth" method="post">
        <table>
          @csrf
          <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
          <tr><th>pass: </th><td><input type="password" name="password"></td></tr>
          <tr><th></th><td><input type="submit" name="送信"></td></tr>
        </table>
      </form>
    </div>

    <hr>

    <div class="footer">
      <p>ここはフッター　ここはフッター　ここはフッター</p>
    </div>
    <hr>
  </body>
</html>