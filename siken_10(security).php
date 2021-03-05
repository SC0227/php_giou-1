<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>PHP技術者認定・初級-08</title>
<script src="http://jquery.com/src/jquery-latest.js"></script>
<script type="text/javascript" src="../js/jquery-172.js"></script>
<script type="text/javascript" src="../js/winet-76.js"></script>
<script type="text/javascript">
function func1() {   i=1; n=  2;  func0();	}  //問1	 
function func2() {  i=2; n = 0 ; func0();	} 	//問2		
function func3() { i=3; n = 1 ; func0();} //問3		
function func4() {i=4; n = 3 ; func0();} //問4		
function func5() {   i=5 ; n = 0 ; func0();	} 	//問5		
function func6() {  i=6 ; n = 3 ; func0();	} //Q6

</script>
<link href="../php_doc/css/un-76.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="F1" action="#">
<div class="demo-show">
  <p><span class="list-style1">■</span> 問1  セキュリティ対策について、正しいものを1つ次の記述の中から選択せよ。  </p> 
  【語群】<br />
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R1" value="1"></td>
      <td width="96%"> 1.　入力のフィルタリングのみ行う。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="2"></td>
      <td>   2.　出力のエスケープのみ行う。  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="3"></td>
      <td> 3.　少なくとも、入力のフィルタリングと出力のエスケープを行う。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="4"></td>
      <td> 4.　データベースのデータは信頼してよい。 </td>
    </tr>
  </table>
  <br />
<?php
    echo "<input type='hidden' R1.value />\n"; ?>
  <input type="button" value="OK" onclick="func1()">
   
  

  <h1 id="seikai1"> </h1>
  <div class="kaisetsu">解 <strong id="kai1"> </strong>)<br>
 少なくとも、入力のフィルタリングと出力のエスケープは、必ず行う。<br>
セキュリティの基本は多重防御である。<br>
懸念材料となるものは、すべて取り除く。<br>
複数の対策でたとえ重複がうまれそうでも、しないよりはするほうを選択する。  <br>
  </div>

  <hr>
  
  
  <p><span class="list-style1">■</span>問 2 　      出力バッファについて、正しいものを1つ次の記述の中から選択せよ。  <br>
  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R2" value="A"></td>
      <td width="96%"> 1.　ob_start() を呼ぶと出力をしないでバッファリングを開始する。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="B"></td>
      <td> 2.　ob_flush()を呼ぶとバッファの内容が消され出力されない。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="C"></td>
      <td> 3.　ob_get_contents()はデータを出力バッファに読み込む。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="D"></td>
      <td> 4.　ob_get_length()を呼ぶと、出力バッファの大きさを返す。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="E"></td>
      <td> 5.　ob_end_flush()を呼ぶと出力をしなくなる。 </td>
    </tr>
    </table>
  <br />
  <br />
  <input type="button" value="OK" onclick="func2()">

  <h2 id="seikai2"> </h2>
  <div class="kaisetsu">
 解答   <strong id="kai2"> </strong>） <br>
  ob_start(） を呼ぶと、出力をしないで(ヘッダ以外の情報）バッファリングを開始する。<br>
  <br>
  ob_flush(）を呼ぶと、このバッファの内容は出力され、消去される。<br>
  ob_get_contents(） を用いて、バッファの内容を文字列変数にコピーできる。<br>
  ob_get_length(）を呼ぶと、バッファの内容の長さを返す。<br>
  ob_end_flush(）は、バッファの内容を出力し、バッファリングを終了する。       </div>
 
   <hr>
   
 <p><span class="list-style1">■</span>問3　          次のコードはPOSTされたフォームパラメータを、出力バッファを使い、まとめてログに書き出す。コード内の[①]の部分に入る正しい関数を1つ次の中から選択せよ。<br>
   <br>
   &lt;?php<br>
    ob_start();<br>
    var_dump($_POST);<br>
    $buf = [①]();<br>
    ob_end_clean();<br>
    error_log($buf);<br>
   ?&gt; </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R3" value="A"></td>
      <td width="96%"> 1.　read_buffer </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="B"></td>
      <td> 2.　ob_get_contents </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="C"></td>
      <td> 3.　ob_read_buffer </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 4.　get_contents </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="E"></td>
      <td> 5.　ob_flush </td>
    </tr>
  </table>
 <br />
  <input type="button" value="OK" onclick="func3()">
<h3 id="seikai3"> </h3>
  <div class="kaisetsu">  
解答 <strong id="kai3"> </strong>）   <br>
ob_start(） を呼ぶと、出力をしないで(ヘッダ以外の情報）バッファリングを開始する。その後の出力は（var_dump(）も）、出力バッファに対して行われる。 ob_get_contentsで出力バッファの内容を変数に代入できる。ob_end_clean(）を呼ぶと出力バッファの内容を消去し、出力先を元にもどす。  <br>
  </div>  
  

   <hr>
   
 <p><span class="list-style1">■</span> 問4&nbsp; &nbsp;  予約語ではないものを1つ次の記述の中から選択せよ。 </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R4" value="A"></td>
      <td width="96%"> 1.　if </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="B"></td>
      <td> 2.　include </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="C"></td>
      <td> 3.　__FILE__ </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 4.　php </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 5.　array </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func4()">
<h4 id="seikai4"> </h4>
  <div class="kaisetsu">  
解答   <strong id="kai4"> </strong>）<br>
予約語とはプログラミング言語のパーサが特別に扱う文字列でキーワードと呼ばれる事もある。予約語は関数名と定数名に利用できない特別な文字列である。文法の要素、定義済み関数、定義済み定数のように見える文字列の一部が予約語である。予約語を関数名や定数名に利用するとパースエラー(E_PARSE）が発生する。<br>
<br>
予約語に似たものとして定義済みのクラス・関数・定数がある。これらを重複して定義しようとすると一般的なエラーである、致命的なエラー（E_ERROR）、警告エラー（E_WARNING）、通知エラー（E_NOTICE）が発生する。<br>
<br>
古いPHPではE_ERRORを含めてエラーハンドラで処理できたので明確に区別する必要があった。現在のPHPではE_ERROR（関数の重複定義などで発生）もエラーハンドラで処理できなくなった為、明確に区別する必要性は少なくなったが、予約語は把握しておく方が良い。<br>
<br>
If は予約語（条件文のPHPのキーワード）である。<br>
includeは予約語（言語の定義）である。<br>
__FILE__は予約語（コンパイル時の定数）である。<br>
arrayは予約語（言語要素）である。  <br>
<br>
  </div>
  
   <hr>

 <p><span class="list-style1">■</span> 問 5&nbsp;  PHPの予約語について誤っているものを1つ次の記述の中から選択せよ。 </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R5" value="A"></td>
      <td> 1.　定義済のクラス、定数も予約語に含まれる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="B"></td>
      <td> 2.　定義済みの定数として含まれる予約語もある。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="C"></td>
      <td> 3.　言語を構成する文が予約語に含まれる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 4.　予約語は、いずれも定数、クラス名、 関数名として使用することができず、使用するとパースエラーが発生する。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="E"></td>
      <td> 5.　予約語はいずれも、変数名として使用することができない。使用するとパースエラーが発生する。 </td>
    </tr>

  </table>
  <br />
  <input type="button" value="OK" onclick="func5()">
<h5 id="seikai5"> </h5>
  <div class="kaisetsu">  
解答  <strong id="kai5"> </strong>）<br>
定義済みのクラス、関数、定数の名前は予約語で、重複して使用することはできません。しかし、予約語であっても、先頭に '$' をつけて変数名として利用することは可能です。しかし、混乱のもととなるのでそういう使い方はあまりしません。  <br>
  </div>
   <hr>

 <p><span class="list-style1">■</span> 問 6　   PHPについて誤っているものを1つ次の記述の中から選択せよ。<br>
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R6" value="A"></td>
      <td width="96%"> 1.　スクリプト型の言語であり明示的にコンパイルせずにプログラムを実行できる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="B"></td>
      <td> 2.　  Webアプリケーション用の言語として大規模なシステムから小規模なシステムまで広く利用されている。  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="C"></td>
      <td> 3.　Webアプリケーション以外での用途にも利用でき、コマンドラインから実行する環境もある。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="D"></td>
      <td> 4.　プログラムを一行づつ読み込んで実行するスクリプト型の言語であるため速度が求められるWebアプリケーションには不向きである。 </td>
    </tr>
  </table>
<br>
<input type="button" value="OK" onclick="func6()">
<h6 id="seikai6"> </h6>
  <div class="kaisetsu">  
解答   <strong id="kai6"> </strong>）  <br>
4） コンパイル型のJavaのWebアプリケーションは仕組みが複雑で必ずしもPHPより速くスケーラブルなアプリケーションが作れるとは限らない。スクリプト系の言語であっても高い性能とスケーラビリティを持ったWebサイトを作ることも十分可能である。例えば、5億人以上のユーザーを持つFacebookはPHPで記述されている。より速い実行速度を得るためPHPのプログラムをC++のコードに変換するHipHop for PHPが利用されていることはよく知られている。  <br>
  </div>
 
 
</div>
</form>
</body>
</html>
