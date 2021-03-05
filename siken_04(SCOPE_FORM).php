<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>PHP技術者認定・初級-04</title>
<script src="http://jquery.com/src/jquery-latest.js"></script>
<script type="text/javascript" src="../js/jquery-172.js"></script>
<script type="text/javascript" src="../js/winet-76.js"></script>
<script type="text/javascript">
function func1() {   i=1; n=  0;  func0();	}  //問1	 
function func2() {  i=2; n = 3 ; func0();	} 	//問2		
function func3() { i=3; n = 2 ; func0();} //問3		
function func4() {i=4; n = 4 ; func0();} //問4		
function func5() {   i=5 ; n = 2 ; func0();	} 	//問5		
function func6() {  i=6 ; n = 0 ; func0();	} //Q6

</script>
<link href="../php_doc/css/un-76.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="F1" action="#">
<div class="demo-show">
  <p><span class="list-style1">■</span> 問1
    変数のスコープについて、正しいものを1つ次の記述の中から選択せよ。  </p> 
  【語群】<br />
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R1" value="1"></td>
      <td width="96%"> 1.　関数スコープから直接グローバル変数は参照できない。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="2"></td>
      <td> 2.　PHPのコードブロック"{ }"はC言語やJava言語と同じくスコープを持つ。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="3"></td>
      <td> 3.　静的変数は関数スコープ以外からも参照できる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="4"></td>
      <td> 4. 静的クラス変数はスコープレゾリューションオペレータ"::"を利用しても参照できない。 </td>
    </tr>
  </table>
  <br />
<?php
    echo "<input type='hidden' R1.value />\n"; ?>
  <input type="button" value="OK" onclick="func1()">
   
  

  <h1 id="seikai1"> </h1>
  <div class="kaisetsu">解 <strong id="kai1"> </strong>)<br>
      1） PHPのグローバル変数は関数やクラススコープから直接参照できない。global宣言するかスーパーグローバルの$GLOBALS配列を利用しなければならない。   <br>
    2） PHPのブロックはスコープを持たない。<br>
3） 静的変数（スタティック変数）は関数スコープの中でのみ参照できる。<br>
4） 静的クラス変数（スタティッククラス変数）は::オペレータを使って参照できる。  </div>

  <hr>
  
  
  <p><span class="list-style1">■</span>問 2  スーパーグローバル変数でない変数を次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R2" value="A"></td>
      <td width="96%"> 1.　$_GET </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="B"></td>
      <td> 2.　$GLOBALS </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="C"></td>
      <td> 3.　$_SESSION </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="D"></td>
      <td> 4.　$_CONFIG </td>
    </tr>
    </table>
  <br />
  <br />
  <input type="button" value="OK" onclick="func2()">

  <h2 id="seikai2"> </h2>
  <div class="kaisetsu">
 解答   <strong id="kai2"> </strong>） <br>
1） $_GET配列にはクエリ文字列のパラメータが保存される。<br>
2） $GLOBALS配列には全てのグローバル変数が保存される。<br>
3） $_SESSION配列にはセッション変数が保存される。  <br>
4） $_CONFIG配列は存在しない。  </div>
 
   <hr>
   
 <p><span class="list-style1">■</span>問3　  関数についての説明として正しいものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R3" value="A"></td>
      <td width="96%"> 1.　関数の名前に使える文字は、数字、英字、アンダースコア、ハイフンであるが、全角文字は使用できない。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="B"></td>
      <td> 2.　関数の宣言は、関数の呼び出しよりも前に書かなければならない。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="C"></td>
      <td> 3.　引数にデフォルト値がない関数を宣言した場合、呼び出すときに引数を与えないと警告が出る。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 4.　引数が2つある関数を宣言した場合、呼び出すときに引数を3つ与えると警告が出る。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 5.　関数の宣言にある引数の名前を変更した場合、関数の呼び出しで与える引数の変数名も同じ名前に変更する必要がある。 </td>
    </tr>
  </table>
 <br />
  <input type="button" value="OK" onclick="func3()">
<h3 id="seikai3"> </h3>
  <div class="kaisetsu">  
解答 <strong id="kai3"> </strong>）   <br>
1） <br>
ハイフンは関数名に使用できない。<br>
<br>
2） <br>
関数の宣言は、関数の呼び出しより前にも後にも書くことができる。 <br>
3） <br>
以下のような関数呼び出しをした場合、引数が指定されていないので警告が出る。<br>
function say_hello($name） {<br>
    echo "こんにちは $name さん！";<br>
}<br>
say_hello(）;  <br>
4） <br>
以下ような関数呼び出しをしても警告は出ない。<br>
function say_hello($name） {<br>
    echo "こんにちは $name さん！";<br>
}<br>
say_hello('やまだ', 'すずき', 'さとう'）;<br>
<br>
5） <br>
以下の2つの関数は同じ処理結果になる。<br>
function say_hello($name） {<br>
    echo "こんにちは $name さん！";<br>
}<br>
function say_hello2($your_name） {<br>
    echo "こんにちは $name さん！";<br>
}<br>
$name = 'やまだ';<br>
say_hello($name）;    // こんにちはやまださん！<br>
say_hello2($name）;   // こんにちはやまださん！  <br>
  </div>  
  
   <hr>
   
 <p><span class="list-style1">■</span> 問 4
    関数についての説明として正しいものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R4" value="A"></td>
      <td width="96%"> 1.　関数は「return 2, 3;」のように、複数の値を返すことができる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="B"></td>
      <td> 2.　1つの'関数の中に'return文を複数書くと、一番最初のreturnが常に実行される。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="C"></td>
      <td> 3.　関数は必ず戻り値を返さなければならない。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 4.　戻り値の数は引数の数と同じでなくてはならない。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 5.　関数は数字や文字列だけでなく、配列などを返すこともできる。 </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func4()">
<h4 id="seikai4"> </h4>
  <div class="kaisetsu">  
解答   <strong id="kai4"> </strong>）<br>
1）<br>
関数から複数の値を返したい場合は、1個の配列にそれらの値を入れてからその配列を返す。<br>
<br>
2） <br>
関数等のプログラムの流れによって最初に出会ったreturn命令文が実行される。<br>
<br>
3） <br>
関数の中でエラーが起きていないかどうか判断するためにも戻り値は有用だが、必ず必要というわけではない。<br>
<br>
4） <br>
関数の引数と戻り値の数は、それぞれ自由に宣言できる。  </div>
  
   <hr>

 <p><span class="list-style1">■</span> 問 5        HTMLフォームでデータ送信を行った場合の動作について、誤っているものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R5" value="A"></td>
      <td> 1.　GETメソッドで送信したデータは$_GET配列に、POSTメソッドで送信されたデータは$_POST配列にデータが保存される。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="B"></td>
      <td> 2.　$_REQUESTに保存されるデータにはGET, POSTで送信されたデータ以外にCookieのデータも含まれる。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="C"></td>
      <td> 3.　送信されたデータの文字エンコーディングはフォームプロパティで確認できる。文字エンコーディング変換が必要な場合はこのプロパティを利用する事ができる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 4.　ファイルをアップロードする為にはフォーム送信のエンコーディングをmultipart/form-dataに設定して送信しなければならない。送信されたデータは$_FILES配列に保存される。 </td>
    </tr>

  </table>
  <br />
  <input type="button" value="OK" onclick="func5()">
<h5 id="seikai5"> </h5>
  <div class="kaisetsu">  
解答  <strong id="kai5"> </strong>）<br>
1） GETメソッドとして送信した場合、クエリ文字列としてデータが送信され$_GET配列に保存される。<br>
<br>
2） $_REQUESTにはGET,POSTメソッドで送信されたデータとクッキーのデータが保存される。初期化する順序や変数はphp.iniのvariables_order設定で指定でき環境変数やセッション変数も含める事ができる。<br>
  <br>
  3） フォームプロパティと呼ばれる概念はPHPのフォーム処理には存在しない。文字エンコーディングを指定する情報をフォームデータに自動的に付加する機能はない。  <br>
  <br>
  4） PHPはフォームがmultipart/form-dataエンコーディングのPOSTメソッドで送信された場合はファイル送信として処理され、$_POST以外に$_FILES配列も初期化する。  </div>
   <hr>

 <p><span class="list-style1">■</span> 問 6
         フォームで送られたデータのバリデーションとして適切でない処理方法を1つ次の記述の中から選択せよ。  <br>
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R6" value="A"></td>
      <td width="96%"> 1.　ブラウザからの入力は全て文字列データとして送信されるので整数データは整数型にキャストしてから、範囲などをチェックする。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="B"></td>
      <td> 2.　フォームなどから送信されたデータは文字列データとして送信されるので正規表現などの文字列関数でバリデーション処理が行える。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="C"></td>
      <td> 3.　バリデーションはプログラムが期待するデータ形式や範囲であることをチェックする。プログラムが予期しないデータ形式や範囲で無いことをチェックする方法ではチェック漏れが発生する可能性が高くなる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="D"></td>
      <td> 4.　ブラウザやデータベースなどに出力する予定が無いパラメータであってもデータ形式や範囲などをできるだけ詳しくチェックする。入力ミスなどを除き、プログラムが予期しないデータが送信された場合はプログラムの実行を中止する方が安全なWebアプリケーションを構築できる。 </td>
    </tr>
  </table>
<br>
<input type="button" value="OK" onclick="func6()">
<h6 id="seikai6"> </h6>
  <div class="kaisetsu">  
解答   <strong id="kai6"> </strong>）  <br>
  1） 整数型をキャストした場合、オーバーフローを起こす可能性がある。特に32bit環境では20億ほどでオーバーフローするのでデータベースのIDなどでオーバーフロー問題を発生する可能性が非常に高くなる。   <br>
  <br>
  2） HTMLフォームのデータは全て文字列型のデータとして送信される。<br>
  <br>
  3） 正しい形式でなく不正な形式を指定するブラックリスト方式のバリデーションではチェック漏れが発生する可能性が高くなる。正しい形式を指定するホワイトリスト方式でバリデーションは行わなければならない。<br>
  <br>
  4） 適切なバリデーションでエラーが発生した場合、プログラムが予期しない入力が発生したと考えられる。このような場合はプログラムの実行を停止すべきである。  </div>
 
 
</div>
</form>
</body>
</html>
