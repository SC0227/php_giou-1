<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>PHP技術者認定・初級-02</title>
<script src="http://jquery.com/src/jquery-latest.js"></script>
<script type="text/javascript" src="../js/jquery-172.js"></script>
<script type="text/javascript" src="../js/winet-76.js"></script>
<script type="text/javascript">
function func1() {   i=1; n=  4;  func0();	}  //問1	 
function func2() {  i=2; n = 1 ; func0();	} 	//問2		
function func3() { i=3; n = 2 ; func0();} //問3		
function func4() {i=4; n = 3 ; func0();} //問4		
function func5() {   i=5 ; n = 1 ; func0();	} 	//問5		
function func6() {  i=6 ; n = 1 ; func0();	} //Q6

</script>
<link href="../php_doc/css/un-76.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="F1" action="#">
<div class="demo-show">
  <p><span class="list-style1">■</span> 問1
    式の結果が「3.75」とならないものを1つ次の記述の中から選択せよ。  </p> 【語群】<br />
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R1" value="1"></td>
      <td width="96%">1.    $price = '3' . '.75';  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="2"></td>
      <td>2.      $price = 3 + .75;  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="3"></td>
      <td> 3.      $price = '3' + '.75';  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="4"></td>
      <td> 4.      $price = '3' + '0.75yen';    </td>
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
(1） ○<br>
  「.」演算子によって、「3」と「.75」の文字列が連結される。<br>
  <br>
  (2） ○<br>
  数値の「.75」は「0.75」と解釈される。<br>
  <br>
  (3） ○<br>
  「+」演算子によって、文字列の数字も数値と解釈される。「.75」は「0.75」と解釈される。<br>
  <br>
  (4）<br>
  「+」演算子によって、文字列の数字も数値と解釈される。「0.75yen」のように数値以外の文字がある場合、前方の数値部分だけ（この場合は「0.75」）が計算に使用される。  </div>

  <hr>
  
  
  <p><span class="list-style1">■</span>問 2    「It's $3.75.」と表示されるものを1つ次の記述の中から選択せよ。<br>
    金額の設定は以下のようにする。<br>
    <br>
    $price = "$3.75"; </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R2" value="A"></td>
      <td width="96%">1.  print "It's ($price)."; </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="B"></td>
      <td>2.    print 'It\'s '.$price.'.';  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="C"></td>
      <td> 3.    print "It\'s {$price}."; </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="D"></td>
      <td> 4.  print 'It\'s $price.';  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="E"></td>
      <td> 5.　上記の中にはない </td>
    </tr>
  </table>
  <br />
  <br />
  <input type="button" value="OK" onclick="func2()">

  <h2 id="seikai2"> </h2>
  <div class="kaisetsu">
 解答   <strong id="kai2"> </strong>）   (1） × (It's ($3.75）.）<br>
 変数は展開されるが、「(）」がそのまま表示されてしまう。<br>
 <br>
 (2） ○<br>
 <br>
 (3） × (It\'s $3.75.）<br>
 「"」で囲った文字列の中では、「'」に対するエスケープ（「\'」）は必要ないので、「\」が出力されてしまう。「{}」の使用について、変数の名前を他の文字列と区別するために、「{}」で囲うことが一般的に推奨されている。<br>
 <br>
 (4） × (It's $price.）<br>
 「'」で囲った文字列の中では変数が展開されないので、そのまま表示されてしまう。  </div>
 
   <hr>
   
 <p><span class="list-style1">■</span>問3
    （TRUE)と評価される式を１つ次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R3" value="A"></td>
      <td width="96%">1.      NULL === 0    </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="B"></td>
      <td>2.      '' === 0    </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="C"></td>
      <td> 3.      '0  ABC' == 0     </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 4.      '' == TRUE    </td>
    </tr>
  </table>
 <br />
  <input type="button" value="OK" onclick="func3()">
<h3 id="seikai3"> </h3>
  <div class="kaisetsu">  
解答 <strong id="kai3"> </strong>）   数値の後に文字列があっても文字列のはじめの部分が数値形式の場合は数値型に変換されるため、&rsquo;0 ABC'は整数の0に変換され、0と同じと評価される。  </div>  
  
   <hr>
   
 <p><span class="list-style1">■</span> 問 4
    次の式のうち偽（FALSE)と評価される式を１つ次の記述の中から選択せよ。つまり、var_dump関数で出力するとbool(false)と表示される式を選択せよ。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R4" value="A"></td>
      <td width="96%">1.      '     0' == TRUE  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="B"></td>
      <td>2.        '0 XYZ' == 0    </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="C"></td>
      <td> 3.        '00' == TRUE    </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 4.        '0x1' === 1  </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func4()">
<h4 id="seikai4"> </h4>
  <div class="kaisetsu">  
解答   <strong id="kai4"> </strong>）   '0x1'は文字列として評価されるため、整数の1とは不等として評価されるのでFALSEとなる。文字列ではなくスクリプト中に0x1と記述すると16進数の整数として取り扱われる。つまりPHPは10進数に見える文字列だけ数値として取り扱う。   </div>
  
   <hr>

 <p><span class="list-style1">■</span> 問 5    式の比較について、正しいものを1つ次の記述の中から選択せよ。    
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R5" value="A"></td>
      <td>1.  PHPは8進数、10進数、16進数の整数表記をサポートしているがキャストして比較しなければならない。</td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="B"></td>
      <td>2.          コンテクストに応じてデータ型が自動変換され、文字列型と数値型などの比較を行うと型の自動変換が行われ比較される。</td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="C"></td>
      <td> 3.          オブジェクト型の比較は、プロパティの値が比較される。</td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 4.          PHPの浮動小数点型は精度が低く設定されているので等価比較を行なっても問題は発生しない</td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func5()">
<h5 id="seikai5"> </h5>
  <div class="kaisetsu">  
解答  <strong id="kai5"> </strong>）   コンテクスト（文脈）に応じて自動的に型変換する機能はタイプジャグリング（Type Juggling）と呼ばれている機能である。   </div>
   <hr>

 <p><span class="list-style1">■</span> 問 6
     式の評価結果がtrueになるものを1つ次の記述の中から選択せよ。  <br>
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R6" value="A"></td>
      <td width="96%">1.    '10' === 10  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="B"></td>
      <td>2.      0 == null  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="C"></td>
      <td> 3.      '$123' &gt; '$9' </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="D"></td>
      <td> 4.    123円' &gt; '9円' </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="E"></td>
      <td> 5.　上記の中にはない </td>
    </tr>
  </table>
<br>
<input type="button" value="OK" onclick="func6()">
<h6 id="seikai6"> </h6>
  <div class="kaisetsu">  
解答   <strong id="kai6"> </strong>）  <br>
(1) ×<br>
「===」演算子は型の種類もチェックするので、文字列の「'10'」と数値の「10」は等しくない。<br>
<br>
(2) ○<br>
「==」演算子は型の種類をチェックしないので、「0」「null」「false」「''（空文字）」などはすべて等しい。<br>
<br>
(3)(4) ×<br>
数値以外の文字列が混入している場合、文字列として比較される。<br>
文字列の比較では1文字目から順番に比べていくため、「1」と「9」が比較されて、「123」の方が「9」よりも小さくなる。<br>
<br>
ファイルの一覧などで、1, 2, 3, …, 10 ではなく、1, 10, 2, 3, … と並ぶことがあるのは、ファイル名の数字を数値ではなく文字列で比較しているためである。  </div>
 
 
</div>
</form>
</body>
</html>
