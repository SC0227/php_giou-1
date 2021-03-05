<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>PHP技術者認定・初級-08</title>
<script src="http://jquery.com/src/jquery-latest.js"></script>
<script type="text/javascript" src="../js/jquery-172.js"></script>
<script type="text/javascript" src="../js/winet-76.js"></script>
<script type="text/javascript">
function func1() {   i=1; n=  4;  func0();	}  //問1	 
function func2() {  i=2; n = 3 ; func0();	} 	//問2		
function func3() { i=3; n = 2 ; func0();} //問3		
function func4() {i=4; n = 3 ; func0();} //問4		
function func5() {   i=5 ; n = 1 ; func0();	} 	//問5		
function func6() {  i=6 ; n = 3 ; func0();	} //Q6

</script>
<link href="../php_doc/css/un-76.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="F1" action="#">
<div class="demo-show">
  <p><span class="list-style1">■</span> 問1
        ファイルを一行ずつ読み込んでその中身を表示する以下のコードがある。コード内の[（1）]の部分に入る正しい式を1つ次の記述の中から選択せよ。  <br>
      <br>
      $fh = fopen('user.log');<br>
for ( [（1）] ) {<br>
    $line = trim($line);<br>
    echo $line . "&lt;br /&gt;\n";<br>
}  </p> 
  【語群】<br />
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R1" value="1"></td>
      <td width="96%"> 1.　$line = ''; $fn &lt; max($fn); $fn++ </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="2"></td>
      <td> 2.　$line = ''; feof($fh); $line = fget($fh) </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="3"></td>
      <td> 3.　$line = fget($fh); $line &lt; count($fh); $line++ </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="4"></td>
      <td> 4.　$line = fget($fh); feof($fh); $line = fget($fh) </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="5"></td>
      <td> 5.　$line = fget($fh); !feof($fh); $line = fget($fh) </td>
    </tr>
  </table>
  <br />
<?php
    echo "<input type='hidden' R1.value />\n"; ?>
  <input type="button" value="OK" onclick="func1()">
   
  

  <h1 id="seikai1"> </h1>
  <div class="kaisetsu">解 <strong id="kai1"> </strong>)<br>
    <br>
初期設定でファイルの一行目のデータを取得し（$line = fget($fh)）、ファイルの終端子が現れるまで（!feof($fh)）、各行のデータを読み込んでいく（$line = fget($fh)）。<br>
    for( カウンタ初期値設定; 条件式①; カウンタ増減設定 )<br>
{<br>
  // 条件式① が 「TRUE」 の間、繰り返し処理されます。<br>
} <br>
  </div>

  <hr>
  
  
  <p><span class="list-style1">■</span>問 2 　  次のコードでXMLをパース(構文解析)した結果の出力として、正しいものを1つ次の記述の中から選択せよ。<br>
    <br>
    &lt;?php<br>
    $string = &lt;&lt;&lt;XML<br>
    &lt;?xml version='1.0'?&gt; <br>
    &lt;book&gt;<br>
     &lt;title&gt;Forty What?&lt;/title&gt;<br>
     &lt;author&gt;Joe&lt;/author&gt;<br>
     &lt;author&gt;Bob&lt;/author&gt;<br>
     &lt;desc&gt;<br>
             &lt;pub&gt;2011/1/1&lt;/pub&gt;<br>
              I know that's the answer -- but what's the question?<br>
     &lt;/desc&gt;<br>
    &lt;/book&gt;<br>
    XML;<br>
    <br>
    $xml = simplexml_load_string($string);<br>
    <br>
    print_r($xml);<br>
    ?&gt; </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R2" value="A"></td>
      <td width="96%"> 1.　SimpleXMLElement Object<br>
        (<br>
            [title] =&gt; Forty What?<br>
            [author] =&gt; Joe, Bob<br>
        <br>
            [desc] =&gt; SimpleXMLElement Object<br>
        ) </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="B"></td>
      <td> 2.　SimpleXMLElement Object<br>
        (<br>
        [book] =&gt; Array<br>
         (<br>
            [title] =&gt; Forty What?<br>
            [author] =&gt; Array<br>
                (<br>
                    [0] =&gt; Joe<br>
                    [1] =&gt; Bob<br>
                )<br>
        <br>
            [desc] =&gt; SimpleXMLElement Object<br>
                (<br>
                    [pub] =&gt; 2011/1/1<br>
                )<br>
        <br>
         )<br>
        ) </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="C"></td>
      <td> 3.　SimpleXMLElement Object<br>
        (<br>
            [title] =&gt; Forty What?<br>
            [author] =&gt;  Bob<br>
        <br>
            [desc] =&gt; SimpleXMLElement Object<br>
                (<br>
                    [pub] =&gt; 2011/1/1<br>
                )<br>
        <br>
        ) </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="D"></td>
      <td> 4.　SimpleXMLElement Object<br>
        (<br>
            [title] =&gt; Forty What?<br>
            [author] =&gt; Array<br>
                (<br>
                    [0] =&gt; Joe<br>
                    [1] =&gt; Bob<br>
                )<br>
        <br>
            [desc] =&gt; SimpleXMLElement Object<br>
                (<br>
                    [pub] =&gt; 2011/1/1<br>
                )<br>
        <br>
        ) </td>
    </tr>
    </table>
  <br />
  <br />
  <input type="button" value="OK" onclick="func2()">

  <h2 id="seikai2"> </h2>
  <div class="kaisetsu">
 解答   <strong id="kai2"> </strong>） <br>
   引数になっているXMLドキュメントに保持されたデータを含むプロパティを有する SimpleXMLElement クラスのオブジェクトを返します。 エラーが発生した場合、この関数は <strong>FALSE</strong> を返します。 <br>
 SimpleXMLはXMLドキュメントが必ず持っているrootノードは無視する。この為、&lt;book&gt;は無視されている。  </div>
 
   <hr>
   
 <p><span class="list-style1">■</span>問3　      例外とエラーについて、正しいものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R3" value="A"></td>
      <td width="96%"> 1.　例外処理とエラー処理は同じエラー処理機構で組み合わせて利用する。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="B"></td>
      <td> 2.　デフォルトの例外処理を置き換える事はできない。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="C"></td>
      <td> 3.　エラー処理はユーザ定義のエラー処理に置き換える事ができる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 4.　PHPの例外はネストすることが出来ない。  </td>
    </tr>
  </table>
 <br />
  <input type="button" value="OK" onclick="func3()">
<h3 id="seikai3"> </h3>
  <div class="kaisetsu">  
解答 <strong id="kai3"> </strong>）   <br>
1） 例外処理とエラー処理は別の機能である。<br>
2） デフォルトの例外処理はset_exception_handler関数でユーザ定義例外ハンドラに置き換えることができる。<br>
  3） set_error_handler関数でユーザ定義エラーハンドラに置き換える事ができる。   <br>
  4） PHP 5.3から例外はネストすることができる。  <br>
  </div>  
  
   <hr>
   
 <p><span class="list-style1">■</span> 問 4    デバッグの際に、ファイルが呼び出されたことを確認するため、そのファイルの先頭に一時的に追加することで、ファイル名を表示して処理を終わらせるのに有効なステートメントを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R4" value="A"></td>
      <td width="96%"> 1.　print("Stop in: ". File()) ; </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="B"></td>
      <td> 2.　echo "Stop in: __FILE__"); </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="C"></td>
      <td> 3.　die ("Stop in: " . __FILE__ ); </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 4.　die ("Stop in: " . File() ); </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func4()">
<h4 id="seikai4"> </h4>
  <div class="kaisetsu">  
解答   <strong id="kai4"> </strong>）<br>
  「die」 は 「exit」 の別名で、スクリプトの処理を 「終了」 し、メッセージを表示します 。 <br>
1）, 4） で使っているfile(）関数は、ファイルを読み込んで配列に格納する関数である。ここでの目的とは違います。<br>
3）は"Stop in: __FILE__" という文字列を出力して処理を続ける。  <br>
<br>
  </div>
  
   <hr>

 <p><span class="list-style1">■</span> 問 5                PHPのオブジェクトに関して、誤っているものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R5" value="A"></td>
      <td> 1.　クラスは、ある種のオブジェクトの変数と関数を記述するテンプレートまたは設計図のようなもので、 class で定義する。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="B"></td>
      <td> 2.　メソッドはクラスの中で定義された関数のことで、method で定義する。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="C"></td>
      <td> 3.　クラスの中で定義された変数のことをプロパティと呼ぶ。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 4.　インスタンスとはクラス定義から実態化されたオブジェクトの事でメソッドを使ってプロパティを操作できる。 </td>
    </tr>

  </table>
  <br />
  <input type="button" value="OK" onclick="func5()">
<h5 id="seikai5"> </h5>
  <div class="kaisetsu">  
解答  <strong id="kai5"> </strong>）<br>
<br>
2）   クラスの中のメソッドを定義するための関数を記述する場合も function を使う。  <br>
  <br>
  </div>
   <hr>

 <p><span class="list-style1">■</span> 問 6
                 PHPで新しいオブジェクトの作成について、誤っているものを1つ次の記述の中から選択せよ。ただし、PHPの設定はデフォルト設定とする。          <br>
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R6" value="A"></td>
      <td width="96%"> 1.　PHP5では $obj = &amp; new MyClass; のように&amp;オペレータを利用しても実質的に $obj = new MyClass; と変わらない。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="B"></td>
      <td> 2.　PHPで新しいオブジェクトインスタンスの作成を行う際は、new 演算子を使用する。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="C"></td>
      <td> 3.　既存のオブジェクトからコピーを作成するにはclone演算子を使用する。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="D"></td>
      <td> 4.　PHP5でも=（代入)演算子を用いてオブジェクトのコピーが作成できる。 </td>
    </tr>
  </table>
<br>
<input type="button" value="OK" onclick="func6()">
<h6 id="seikai6"> </h6>
  <div class="kaisetsu">  
解答   <strong id="kai6"> </strong>）  <br>
1） PHP5以降のPHPではオブジェクトがハンドルで扱われる。オブジェクト変数の参照を&amp;オペレータで代入しても、オブジェクトをそのまま代入しても、結果的に同じオブジェクトを参照する。  <br>
$a = 3;<br>
$b = &amp;$a; // $b は $a への参照です .<br>
<br>
2） new演算子は新しいオブジェクトを作成する。<br>
3） clone演算子は既存のオブジェクトからコピーを作成する。  <br>
4）PHP5では=（代入演算子）でオブジェクトのコピーは作成できない。古いPHP5ではphp.iniの設定でPHP4と同じように=演算子でオブジェクトのコピーが作成されるオプションがあったが、デフォルト設定ではオブジェクトのハンドルがコピーされオブジェクトはコピーされない。  <br>
  </div>
 
 
</div>
</form>
</body>
</html>
