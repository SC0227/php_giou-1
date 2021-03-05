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
function func3() { i=3; n = 1 ; func0();} //問3		
function func4() {i=4; n = 2 ; func0();} //問4		
function func5() {   i=5 ; n = 3 ; func0();	} 	//問5		
function func6() {  i=6 ; n = 4 ; func0();	} //Q6

</script>
<link href="../php_doc/css/un-76.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="F1" action="#">
<div class="demo-show">
  <p><span class="list-style1">■</span> 問1
      nameというパラメータで訪問者の名前が入力された場合、あいさつ文を表示するプログラムとして以下の[（1)]に入る正しいものを1つ次の記述の中から選択せよ。<br>
      <br>
      If ( ① ){<br>
          echo 'こんにちは、'.$_POST['name'].'さん！';<br>
    } </p> 
  【語群】<br />
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R1" value="1"></td>
      <td width="96%"> 1.　$_post['name'] </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="2"></td>
      <td> 2.　array_key_exists('name', $_POST) </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="3"></td>
      <td> 3.　$_POST[name] != &quot;&quot;</td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="4"></td>
      <td> 4.　$_POST[name] &gt; 0 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="5"></td>
      <td> 5.　上記の中にはない </td>
    </tr>
  </table>
  <br />
<?php
    echo "<input type='hidden' R1.value />\n"; ?>
  <input type="button" value="OK" onclick="func1()">
   
  

  <h1 id="seikai1"> </h1>
  <div class="kaisetsu">解 <strong id="kai1"> </strong>)<br>
1）
「0」という名前の人がいた場合、あいさつが表示されない。<br>
<br>
2）
空白が入力された場合もあいさつしてしまう。 <br>
<br>
3)　空でなければという意味で！。nameは’name’でも同じ。&quot;&quot;　は''（シングル2つ）でも同じ。<br>
<br>
4）
文字列と数字を比較しているのでおかしい結果になる。<br>
「strlen($_POST['name']） &gt; 0」のように文字列の長さを比較するならOK。<br>
<br>
5）
他には「strlen($_POST['name']） &gt; 0」や「$_POST[name] != null」などが使える。  </div>

  <hr>
  
  
  <p><span class="list-style1">■</span>問 2    以下のフォームついての説明で、正しいものを1つ次の記述の中から選択せよ。<br>
    （サンプルコードの簡略化のため、セキュリティは考慮されていない。)<br>
    <br>
    &lt;form action="(1)" method="(2)"&gt;<br>
        Your Name: &lt;input type="text" <br>
                          name="your_name" <br>
                          value="&lt;?php echo (3)['your_name']; ?&gt;" /&gt;<br>
    &lt;/form&gt; </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R2" value="A"></td>
      <td width="96%"> 1.　(1)には「POST」または「GET」のどちらかの送信方法を指定する。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="B"></td>
      <td> 2.　現在では「POST」と「GET」の違いは特に無い。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="C"></td>
      <td> 3.　(2)には、フォーム内容の送信先を指定する。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="D"></td>
      <td> 4.　フォーム内容の送信先には自分自身を指定することもできる </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="E"></td>
      <td> 5.　自分自身が送信先の場合、(3)に「$_SELF」と書いておけば、送信方法がGETでもPOSTでもフォーム内容を受け取ることができる。 </td>
    </tr>
    </table>
  <br />
  <br />
  <input type="button" value="OK" onclick="func2()">

  <h2 id="seikai2"> </h2>
  <div class="kaisetsu">
 解答   <strong id="kai2"> </strong>） <br>
  1）
  actionにはフォームの送信先を指定する。<br>
  2)　GETとPOSTの違い
  <ol>
    <li>フォーム内で明示的に宣言しない限りはGETリクエストとなる</li>
    <li>GETの場合は送信内容がURLとして渡される</li>
    <li>GETには送信できる情報量に制限がある</li>
    <li>GETでは日本語などの全角文字を送信できない</li>
  </ol>

  3） 
  methodにはフォームの送信方法（POSTまたはGET）を指定する。<br>
    4） 
    省略した場合も自分自身を指すブラウザが多いが、確実ではないためきちんと指定すること <br>
  5） 
  そのようなスーパーグローバル変数はない。  。  </div>
 
   <hr>
   
 <p><span class="list-style1">■</span>問3　    SQLインジェクションを防ぐ方法として不適切な方法を1つ次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R3" value="A"></td>
      <td width="96%"> 1.　SQLのパラメータ全てを文字列として扱いエスケープ処理する。パラメータ以外のSQL語句やテーブル・フィールド名などエスケープできない部分がパラメータ化されている場合はバリデーション処理で正しい事を確認する。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="B"></td>
      <td> 2.　文字エンコーディングベースの攻撃はデータベースサーバ側で完全には対処できない。この為、MySQLではSET NAMES、PostgreSQLではset_client_encodingまたはSET NAMESを利用してSQLクエリとして文字エンコーディングを指定する。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="C"></td>
      <td> 3.　プリペアードクエリを利用すると全てのパラメータをエスケープした場合と同じ効果を期待できる。しかし、プリペアするクエリにパラメータを含めてしまうと意味がなくなる。パラメータをプリペアするクエリに決して含めてはならない。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 4.　SQLインジェクションを防ぐ方法としてWAF（Webアプリケーションファイアーウォール)も利用できるが、あくまでもフェイルセーフ機能であり脆弱性があるアプリケーションを作らない事、見つけた脆弱性は修正する事が重要である。 </td>
    </tr>
  </table>
 <br />
  <input type="button" value="OK" onclick="func3()">
<h3 id="seikai3"> </h3>
  <div class="kaisetsu">  
解答 <strong id="kai3"> </strong>）   <br>
1） 動的にSQLを生成する場合、パラメータ以外のSQL語句やテーブル名を動的に生成しなければならない場合も少なくない。このような場合は正しい文字列であるかバリデーション処理を行って対処する。<br>
<br>
2） データベースのエスケープ関数は接続しているデータベースの文字エンコーディングに合わせてエスケープ処理する。この為、pg_set_client_encoding関数やmysqli_client_encoding関数などのAPIを用いて文字エンコーディングを設定しないと正しいエスケープ処理が出来ない。つまりSET NAMESなどの文字エンコーディング設定のSQLを実行するとエスケープ処理が不十分になる可能性があり、SET NAMESを利用するのは誤り。  <br>
<br>
3） プリペアするクエリの生成にユーザ入力を含む変数を使ってしまうとプリペアードクエリを利用していてもSQLインジェクションが簡単に行える。<br>
<br>
4） WAFはフェイルセーフ対策であり、アプリケーションの不具合は必ず修正しなければならない。 <br>
<br>
  </div>  
  
   <hr>
   
 <p><span class="list-style1">■</span> 問 4
    プリペアードクエリについて、誤っているものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R4" value="A"></td>
      <td width="96%"> 1.　データベースサーバがネイティブでサポートするプリペアードクエリのプリペア済みのクエリは、SQL文をパースする処理が省略できる分、通常のクエリより速く実行できる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="B"></td>
      <td> 2.　データベースサーバがネイティブでサポートするプリペアードクエリのプリペア済みのクエリは、データベースサーバ側に保存されるので多くのクエリをプリペアするとデータベースサーバのメモリ消費量が問題となる場合もある。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="C"></td>
      <td> 3.　プリペアードクエリを利用していればSQLインジェクションは100%発生しない。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 4.　プリペアードクエリはデータベースアクセス抽象化層によって提供されている場合もある。この為、プリペードクエリによって高速化できない場合もある。 </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func4()">
<h4 id="seikai4"> </h4>
  <div class="kaisetsu">  
解答   <strong id="kai4"> </strong>）<br>
1） プリペアードクエリは元々パフォーマンスを向上させる仕組みとして開発された。<br>
<br>
2） それほど多くのメモリは消費しないがプリペアされたクエリは確実にメモリを消費する。また1クライアントあたりがプリペアできるクエリに上限がある場合もある。  <br>
<br>
3） プリペアードクエリを利用していても、パラメータとなる変数を直接渡したり、テーブル・フィールド名、SQL語句などプリペアードクエリのパラメータとして渡せない入力をチェックなしに渡したりすると、SQLインジェクションが可能となる。プリペアードクエリを利用すれば100%SQLインジェクションを防げる訳ではない。<br>
  <br>
4） プリペアードクエリをエミュレートしているライブラリも存在し、エミュレートしている場合はかなり遅くなる。  </div>
  
   <hr>

 <p><span class="list-style1">■</span> 問 5          include/require文などの外部ファイルの読み込みについて、誤っているものを1つ次の記述の中から選択せよ。  。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R5" value="A"></td>
      <td> 1.　include/require文はローカルファイルのみでなくfopenラッパーがサポートするリモートファイルも読み込む事ができる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="B"></td>
      <td> 2.　include/require文は同じファイルを何回でも読み込み実行する。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="C"></td>
      <td> 3.　include/require文で関数定義を行うファイルを２回以上読み込むと定義済み関数が再定義されるエラーが発生する。  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 4.　require文は読み込むファイルが存在しなくてもプログラムの実行を継続できる。 </td>
    </tr>

  </table>
  <br />
  <input type="button" value="OK" onclick="func5()">
<h5 id="seikai5"> </h5>
  <div class="kaisetsu">  
解答  <strong id="kai5"> </strong>）<br>
1） 現在のPHPではリモートファイルの読み込みはphp.ini設定のallow_url_include設定を変更する必要がある。<br>
2） 一度だけ読み込むinclude_once/require_onceが用意されている。<br>
3） ライブラリなどはエラーを防ぐためrequire_once/include_onceで読み込むべきである。  <br>
4） require文は読み込むファイルが存在しないと致命的なエラー（E_ERROR）を発生させ、スクリプトの実行が停止する。   </div>
   <hr>

 <p><span class="list-style1">■</span> 問 6
           PEAR DBのconnect()関数でデータベースに接続する場合、不要な情報を1つ次の記述の中から選択せよ。    <br>
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R6" value="A"></td>
      <td width="96%"> 1.　データベースの種類（MySQLなど) </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="B"></td>
      <td> 2.　データベースのホスト名（localhostなど) </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="C"></td>
      <td> 3.　データベースのユーザ名とパスワード </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="D"></td>
      <td> 4.　データベースのデータベース名 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="E"></td>
      <td> 5.　データベースのバージョン </td>
    </tr>
  </table>
<br>
<input type="button" value="OK" onclick="func6()">
<h6 id="seikai6"> </h6>
  <div class="kaisetsu">  
解答   <strong id="kai6"> </strong>）  <br>
DB::connectへ渡す文字列の形式は以下の通り。<br>
<br>
DBの種類://ユーザ名:パスワード@ホスト名/データベース名    </div>
 
 
</div>
</form>
</body>
</html>
