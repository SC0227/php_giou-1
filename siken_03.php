<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>PHP技術者認定・初級-03</title>
<script src="http://jquery.com/src/jquery-latest.js"></script>
<script type="text/javascript" src="../js/jquery-172.js"></script>
<script type="text/javascript" src="../js/winet-76.js"></script>
<script type="text/javascript">
function func1() {   i=1; n=  3;  func0();	}  //問1	 
function func2() {  i=2; n = 0 ; func0();	} 	//問2		
function func3() { i=3; n = 2 ; func0();} //問3		
function func4() {i=4; n = 2 ; func0();} //問4		
function func5() {   i=5 ; n = 4 ; func0();	} 	//問5		
function func6() {  i=6 ; n = 0 ; func0();	} //Q6

</script>
<link href="../../93_php_doc/css/un-76.css" rel="stylesheet" type="text/css">
		<link href="../../93_php_doc/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<form name="F1" action="#">
<div class="demo-show">
  <p><span class="list-style1">■</span> 問1
    以下の繰り返し文について正しく説明しているものを1つ次の記述のなかから選択せよ。    <br>
    <br>
        $i = 100;<br>
        while($i &gt; 0) {<br>
            print(i);<br>
            $i++;<br>
    } </p> 
  【語群】<br />
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R1" value="1"></td>
      <td width="96%">1.      判定式がfalseなので、このループは一度も実行されない。  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="2"></td>
      <td>2.        $iに代入した値が100なので、このループは100回実行される。  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="3"></td>
      <td> 3.  判定式に「&gt;=」ではなく「&gt;」を使用しているので、このループは99回実行される。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="4"></td>
      <td> 4.        このループは無限ループである。  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="5"></td>
      <td> 5.    このループはfor()文を使って以下のように書き換えられる。<br>
        <br>
        for($i = 0; $i &lt; 100; $i++) {<br>
            print(i);<br>
        } </td>
    </tr>
  </table>
  <br />
<?php
    echo "<input type='hidden' R1.value />\n"; ?>
  <input type="button" value="OK" onclick="func1()">
   
  

  <h1 id="seikai1"> </h1>
  <div class="kaisetsu">解 <strong id="kai1"> </strong>)<br>
  インクリメント（＋＋）によって$iは1ずつ増える</div>

  <hr>
  
  
  <p><span class="list-style1">■</span>問 2      PHPの配列について、誤っているものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R2" value="A"></td>
      <td width="96%">1.    ハッシュ（連想配列)の場合、順序は保証されないので順序が重要な場合は添字配列として利用しなければならない。  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="B"></td>
      <td>2.      添字を省略して要素を追加できる。（例： $a[] = 1234;)  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="C"></td>
      <td> 3.      配列をコピーした場合、PHPの内部的に参照数が増えるだけで、大きな配列をコピーしてもメモリはほとんど消費しない。  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="D"></td>
      <td> 4.    PHPの配列は最後の要素の次に追加するだけでなく、要素の途中にも追加することも可能である。  </td>
    </tr>
    </table>
  <br />
  <br />
  <input type="button" value="OK" onclick="func2()">

  <h2 id="seikai2"> </h2>
  <div class="kaisetsu">
 解答   <strong id="kai2"> </strong>） <br>
1） PHPの配列は順序を持ったハッシュとして実装されている。「順序は保証されない」は誤り。  <br>
2） $a[] = 1234; は数値添字の要素を追加する。<br>
3） PHPは変数のリファレンスカウントとコピーオンライトをサポートしているのでコピーしただけではメモリはほとんど消費しない。<br>
4） array_splice関数で任意の場所に要素を追加・置換できる。  </div>
 
   <hr>
   
 <p><span class="list-style1">■</span>問3　PHPの配列について、正しいものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R3" value="A"></td>
      <td width="96%">1.        リソース型のデータは添字として利用できる。  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="B"></td>
      <td>2.        オブジェクト型のデータは添字として利用できる。  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="C"></td>
      <td> 3.  文字列型のデータは添字として利用できる。  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 4.        浮動小数点型のデータは添字として利用できる。  </td>
    </tr>
  </table>
 <br />
  <input type="button" value="OK" onclick="func3()">
<h3 id="seikai3"> </h3>
  <div class="kaisetsu">  
解答 <strong id="kai3"> </strong>）   <br>
1） リソース型は配列の添字に利用できずエラーとなる。<br>
2） オブジェクト型は配列の添字に利用できずエラーとなる。<br>
  3)　PHPの配列はハッシュ（連想配列）であるため文字列と整数の添字を利用できる。   <br>
4） 浮動小数点型を指定すると整数型に変換されエラーは発生しない。整数に変換されるので浮動小数点型の添字は利用できない。  <br>
  </div>  
  
   <hr>
   
 <p><span class="list-style1">■</span> 問 4
    配列の結合・分割方法で、誤っているものを1つ次の記述の中から選択せよ。ただし、$a1、$a2は配列変数とする。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R4" value="A"></td>
      <td width="96%">1.        $a = $a1 + $a2;  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="B"></td>
      <td>2.        $a = array_merge($a1, $a2);  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="C"></td>
      <td> 3.          $a = $a1 - $a2;  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 4.          $a = array_diff($a1, $a2);  </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func4()">
<h4 id="seikai4"> </h4>
  <div class="kaisetsu">  
解答   <strong id="kai4"> </strong>）<br>
1）と2）の両方共配列を結合しますが、動作は異なっています。<br>
3） PHPは配列に対する"-"オペレータはサポートしていないのでエラーとなる。  <br>
4） 配列の差分を取得します。再帰的には評価されません。   </div>
  
   <hr>

 <p><span class="list-style1">■</span> 問 5      配列の作成方法として、正しく動作するものを1つ次の記述の中から選択せよ。      
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R5" value="A"></td>
      <td>1.    $hobby = new Array('movie', 'car', 'computer');  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="B"></td>
      <td>2.            $hobby = array{'movie', 'car', 'computer'};  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="C"></td>
      <td> 3.                $hobby = array['movie', 'car', 'computer'];  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 4.            $hobby = array(1 = 'movie',<br>
                       2 = 'car',<br>
                       3 = 'computer'); </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 5.　$hobby = array(100);<br>
        $hobby[101] = '101 dogs'; </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func5()">
<h5 id="seikai5"> </h5>
  <div class="kaisetsu">  
解答  <strong id="kai5"> </strong>）<br>
(1）(2）(3） ×<br>
構文が間違っている。<br>
<br>
(4） ×<br>
キーに値を入れる場合、「=」ではなく「=&gt;」を使用する。<br>
以下のようにキーを省略することもできる。<br>
$hobby = array('movie', 'car', 'computer'）;<br>
<br>
(5） ○<br>
この二行は、以下の一行と同じ意味である。<br>
$hobby = array(100, '101 dogs'）;   </div>
   <hr>

 <p><span class="list-style1">■</span> 問 6
       以下のforeach文をfor文で書き直したとき、同じ結果になるものを1つ次の記述の中から選択せよ。  <br>
      <br>
      $array = array(1 =&gt; '日向の山道を',<br>
               2 =&gt; '二人で行きました',<br>
               3 =&gt; '港の蒸気船');<br>
<br>
foreach($array as $key =&gt; $value) {<br>
    print("{$key}つ、{$value}。");<br>
}       <br>
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R6" value="A"></td>
      <td width="96%"> 1.　$count = count($array);<br>
        for($i = 1; $i &lt;= $count; $i++) {<br>
            print("{$i}つ、{$array[$i]}。");<br>
        } </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="B"></td>
      <td> 2.　$count = count($array);<br>
        for($i = 0; $i &lt; $count; $i++) {<br>
            print("{$i}つ、{$array[$i]}。");<br>
        } </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="C"></td>
      <td> 3.　$count = count($array);<br>
        for($i = 1; $i &lt; $count; $i++) {<br>
            print("{$i}つ、{$array[$i]}。");<br>
        } </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="D"></td>
      <td> 4.　$count = count($array);<br>
        for($i = 0; $i &lt; $count; $i++) {<br>
            $i++;<br>
            print("{$i}つ、{$array[$i]}。");<br>
        } </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="E"></td>
      <td> 5.　$count = count($array);<br>
        for($i = 0; $i &lt;= $count; $i++) {<br>
            print("{$i}つ、{$array[$i]}。");<br>
        } </td>
    </tr>
  </table>
<br>
<input type="button" value="OK" onclick="func6()">
<h6 id="seikai6"> </h6>
  <div class="kaisetsu">  
解答   <strong id="kai6"> </strong>）  <br>
配列のキーとしての数値と、繰り返し文の中で使用している数値をそろえることがポイント。<br>
<br>
(1） ○　1, 2, 3 が繰り返される。<br>
(2） ×　0, 1, 2 が繰り返される。<br>
(3） ×　1, 2 が繰り返される。<br>
(4） ×　1, 3 が繰り返される。<br>
(5） ×　0, 1, 2, 3 が繰り返される。<br>
<br>
以下のような書き方でも同じ結果になる。<br>
$count = count($array）;<br>
for($i = 0; $i &lt; $count; $i++） {<br>
    $ii = $i + 1;<br>
    print("{$ii}つ、{$array[$ii]}。"）;<br>
}  </div>
 
 
</div>
</form>
</body>
</html>
