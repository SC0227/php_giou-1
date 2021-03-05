<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>PHP技術者認定・初級-05</title>
<script src="http://jquery.com/src/jquery-latest.js"></script>
<script type="text/javascript" src="../js/jquery-172.js"></script>
<script type="text/javascript" src="../js/winet-76.js"></script>
<script type="text/javascript">
function func1() {   i=1; n=  2;  func0();	}  //問1	 
function func2() {  i=2; n = 3 ; func0();	} 	//問2		
function func3() { i=3; n = 0 ; func0();} //問3		
function func4() {i=4; n = 2 ; func0();} //問4		
function func5() {   i=5 ; n = 4 ; func0();	} 	//問5		
function func6() {  i=6 ; n = 2 ; func0();	} //Q6

</script>
<link href="../php_doc/css/un-76.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="F1" action="#">
<div class="demo-show">
  <p><span class="list-style1">■</span> 問1
      SQL文について誤っているものを1つ次の記述の中から選択せよ。  </p> 
  【語群】<br />
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R1" value="1"></td>
      <td width="96%"> 1.　テーブルの作成には「CREATE」、テーブルの削除には「DROP」を使用する。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="2"></td>
      <td> 2.　SELECT文の結果が0件でもエラーにはならない。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="3"></td>
      <td> 3.　データを挿入するクエリーは例えば「INSERT user_table('user_name') VALUES('yamada');」のようになる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="4"></td>
      <td> 4.　INSERT文でカラムを指定しないと、全てのカラムがデータ入力の対象になる。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="5"></td>
      <td> 5.　UPDATE文などが影響したデータ数はmysql_affected_rows関数, pg_affected_rows関数などで取得できる。 </td>
    </tr>
  </table>
  <br />
<?php
    echo "<input type='hidden' R1.value />\n"; ?>
  <input type="button" value="OK" onclick="func1()">
   
  

  <h1 id="seikai1"> </h1>
  <div class="kaisetsu">解 <strong id="kai1"> </strong>)<br>
    <br>
3)　  INSERT文は「Insert into user_table('user_name'） values('yamada'）」のようにintoが必要  <br>
  </div>

  <hr>
  
  
  <p><span class="list-style1">■</span>問 2      クッキーを設定するコードとして実行できないコードを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R2" value="A"></td>
      <td width="96%"> 1.　setcookie ("TestCookie", "", time() - 3600, "/~rasmus/", ".example.com", 1); </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="B"></td>
      <td> 2.　setcookie("cookie[three]", "cookiethree"); </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="C"></td>
      <td> 3.　header('Set-Cookie: num=123456; expires=Sun, 10-Jun-2001 12:00:00 GMT; path=/HTTP/'); </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="D"></td>
      <td> 4.　header('Cookie: num=123456; expires=Sun, 10-Jun-2001 12:00:00 GMT; path=/HTTP/'); </td>
    </tr>
    </table>
  <br />
  <br />
  <input type="button" value="OK" onclick="func2()">

  <h2 id="seikai2"> </h2>
  <div class="kaisetsu">
 解答   <strong id="kai2"> </strong>） <br>
1） は通常のクッキー設定である。<br>
2） は$_COOKIE['cookie']['three']='cookiethree'という配列型のパラメータを設定する利用方法である。<br>
3） クッキーの設定は通常のHTTPレスポンスヘッダでも可能である。  <br>
    4） CookieヘッダはWebブラウザがサーバにクッキーを送信する為のヘッダである。   </div>
 
   <hr>
   
 <p><span class="list-style1">■</span>問3　  HTTPセッション管理の特徴について、正しいものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R3" value="A"></td>
      <td width="96%"> 1.　$_SESSION配列に保存されたデータはサーバ側のみで処理される。データ量が多くなってもシステムのパフォーマンスに影響を与えない。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="B"></td>
      <td> 2.　デフォルト設定のファイルを利用したセッション管理では、保存するファイルへのアクセスは自動的に排他制御されているため、同時アクセスの問題を考慮する必要はない。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="C"></td>
      <td> 3.　$_SESSION配列はsession_start関数または自動セッション開始機能によりセッションを開始する前から利用できる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 4.　PHPのセッション管理はスクリプトの終了と同時に終了するように設計されており、スクリプトの実行中にセッション管理を終了できない。 </td>
    </tr>
  </table>
 <br />
  <input type="button" value="OK" onclick="func3()">
<h3 id="seikai3"> </h3>
  <div class="kaisetsu">  
解答 <strong id="kai3"> </strong>）   <br>
1） セッションデータはリクエストが発生する度に読み込まれ書きこまれる。セッションデータが大きくなればなるほどシステムのパフォーマンスを低下させる。  <br>
<br>
2） 同時にアクセスできない為、スクリプト終了前にセッション管理を終了させるsession_write_close関数を呼ぶ方が良い場合がある。<br>
3） $_SESSION配列はセッション開始前には利用できない。<br>
4） session_write_close関数でスクリプト中からセッション管理を終了できる。 <br>
<br>
  </div>  
  
   <hr>
   
 <p><span class="list-style1">■</span> 問 4
      ログインフォームのセキュリティ対策として、正しいものを1つ次の記述の中から選択せよ。    </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R4" value="A"></td>
      <td width="96%"> 1.　ユーザビリティ向上の為、ログインに失敗した場合はユーザ名とパスワードのどちらが間違っているのかエラーメッセージで表示すべきである。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="B"></td>
      <td> 2.　ログインに成功した場合に最後にログインした時間やIPアドレスを表示するサイトもあるが、セキュリティ対策として意味がないので表示してはならない。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="C"></td>
      <td> 3.　プログラムなどでパスワードを推測する攻撃を防ぐ目的でログイン処理時間をsleep関数などを利用して長くしてはならない。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 4.　ログイン状態を記憶するサイトを構築する場合、ユーザ名とパスワードをクッキーに保存し、クッキーに保存したユーザ名とパスワードを利用して自動的にログインできるように実装する。 </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func4()">
<h4 id="seikai4"> </h4>
  <div class="kaisetsu">  
解答   <strong id="kai4"> </strong>）<br>
1） ユーザ名の推測を防ぐためユーザ名とパスワードのどちらが間違ったのか知らせるべきではない。<br>
<br>
2） ログイン成功時に最後にログインしたIPアドレスが時間を表示するセキュリティ対策にはアカウントの不正利用防止が検出に有用である。<br>
<br>
 3） Webアプリケーションはできる限り早くレスポンスを返すように構築しないとDoSに脆弱になる。ログイン画面などでsleep関数を使うのではなく、アカウントをロックしたり、ファイアーウォールで過度な接続を制限するなどの対策を取るべきである。<br>
 <br>
4） クッキーにユーザ名やパスワードを保存する仕様はセキュリティ上重大な問題となる。決して行なってはならない設計の一つである。 <br>
  </div>
  
   <hr>

 <p><span class="list-style1">■</span> 問 5            cookieのセット方法として正しいものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R5" value="A"></td>
      <td> 1.　setcookie('user_data', array('id' =&gt; '001')); </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="B"></td>
      <td> 2.　setcookies('001', 'yamada', 'male', 25); </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="C"></td>
      <td> 3.　$_COOKIE['user_name'] = 'yamada'; </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 4.　&lt;html&gt;        &lt;head&gt;        <span class="color-red">&lt;?php </span>setcookie('count', 1); <span class="color-red">?&gt;</span>        &lt;/head&gt;<br>
        &lt;body&gt;<br>
        <span class="color-red">&lt;?php</span> echo $_COOKIE['count']; <span class="color-red">?&gt;</span>回目の訪問ありがとうございます。<br>
        &lt;/body&gt;        &lt;/html&gt; </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="E"></td>
      <td> 5.　上記の中にはない </td>
    </tr>

  </table>
  <br />
  <input type="button" value="OK" onclick="func5()">
<h5 id="seikai5"> </h5>
  <div class="kaisetsu">  
解答  <strong id="kai5"> </strong>）<br>
1） 
クッキーに保存できるのは、数字か文字列だけであり、配列は保存できない。<br>
<br>
2） 
PHPにはsetcookiesという関数はない。<br>
<br>
3） 
この場合、$_COOKIE変数に値が保存されるが、クッキーには保存されないので、次回アクセス時に値を復元できない。<br>
<br>
4） 
クッキーへの値の保存は、どんな出力よりも前に来なくてはならない。。  <br>
  </div>
   <hr>

 <p><span class="list-style1">■</span> 問 6
             PHPの時間関連関数について、正しいものを1つ次の記述の中から選択せよ。      <br>
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R6" value="A"></td>
      <td width="96%"> 1.　PHPの時間関数の多くはグリニッジ標準時1960年1月１日（エポック)からの経過秒数を利用している。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="B"></td>
      <td> 2.　PHPの時間関連関数はエポックより前の時間を正しく扱う事ができない。より広い範囲の時間を扱う場合はDateTimeクラスを利用する。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="C"></td>
      <td> 3.　時間の差分指定には'yesterday', 'ago'など語句を利用して相対的な指定も可能である。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="D"></td>
      <td> 4.　PHPの時間関数はタイムゾーンやロケールを考慮した処理は行えない。タイムゾーンやロケールを考慮した処理を行うためにはDataTimeクラスを利用する。 </td>
    </tr>
  </table>
<br>
<input type="button" value="OK" onclick="func6()">
<h6 id="seikai6"> </h6>
  <div class="kaisetsu">  
解答   <strong id="kai6"> </strong>）  <br>
1） エポックは1960年1月1日ではなく、1970年1月1日である。<br>
2） 現在のシステムでは符号付き64bit整数が利用されているため、過去・未来ともに2920億年までの時間を表現できる。<br>
3） 差分指定に2 days agoなどを指定することはサポートされている。 <br>
 4） オブジェクト指向型APIのDateTimeクラスのみでなく日付時間関数もロケールやタイムゾーンをサポートしている。 <br>
  </div>
 
 
</div>
</form>
</body>
</html>
