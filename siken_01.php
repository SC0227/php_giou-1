<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>PHP技術者認定・初級-01</title>
<script src="http://jquery.com/src/jquery-latest.js"></script>
<script type="text/javascript" src="../js/jquery-172.js"></script>
<script type="text/javascript" src="../js/winet-76.js"></script>
<script type="text/javascript">
function func1() {   i=1; n=  3; func0();	} //問1	
function func2() {  i=2; n = 2 ; func0();	} 	//問2		
function func3() { i=3; n = 0 ; func0();} //問3		
function func4() {i=4; n = 0 ; func0();} //問4		
function func5() {   i=5 ; n = 2 ; func0();	} 	//問5		
function func6() {  i=6 ; n = 1 ; func0();	} //Q6
</script>
<link href="../php_doc/css/un-76.css" rel="stylesheet" type="text/css">
	
</head>

<body>
<form name="F1" action="#">
<div class="demo-show">
  <p><span class="list-style1">■</span> 問1
    PHPについて誤っているものを1つ次の記述の中から選択せよ。  </p> 【語群】<br />
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R1" value="1"></td>
      <td>1.  スクリプト型の言語であり明示的にコンパイルせずにプログラムを実行できる。   </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="2"></td>
      <td>2.    Webアプリケーション用の言語として大規模なシステムから小規模なシステムまで広く利用されている。  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="3"></td>
      <td> 3.    Webアプリケーション以外での用途にも利用でき、コマンドラインから実行する環境もある。   </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="4"></td>
      <td> 4.    プログラムを一行づつ読み込んで実行するスクリプト型の言語であるため速度が求められるWebアプリケーションには不向きである。  </td>
    </tr>
  </table>
  <br />
<?php
    echo "<input type='hidden' R1.value />\n"; ?>
  <input type="button" value="OK" onclick="func1()">
   
  

  <h1 id="seikai1"> </h1>
  <div class="kaisetsu">解 4)
コンパイル型のJavaのWebアプリケーションは仕組みが複雑で必ずしもPHPより速くスケーラブルなアプリケーションが作れるとは限らない。スクリプト系の言語であっても高い性能とスケーラビリティを持ったWebサイトを作ることも十分可能である。例えば、5億人以上のユーザーを持つFacebookはPHPで記述されている。より速い実行速度を得るためPHPのプログラムをC++のコードに変換するHipHop for PHPが利用されていることはよく知られている </div>

  <hr>
  
  
  <p><span class="list-style1">■</span>問 2  【PHPと互換性】<br>
    <br>
    PHPプログラムのポータビリティについて、誤っているものを1つ次の記述の中から選択せよ。 </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R2" value="A"></td>
      <td>1.  PHPのモジュール関数はビルドする際に利用されたライブラリのバージョンなどによって定義されない関数が存在する。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="B"></td>
      <td>2.  PHPのモジュールにはシステムが提供するライブラリのラッパー関数となっている物がある。この場合、システムライブラリの互換性にプログラムの動作が影響される場合がある </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="C"></td>
      <td> 3.  PHP 5.3ではWindows環境とUNIX系のLinux/Mac OSX環境との互換性が大幅に強化され、Windows系とUNIX系のOSの違いを意識しなくても両方のプラットフォームで動作するプログラムを記述できるようになった。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="D"></td>
      <td> 4.  PHPのマイナーバージョンアップ（例：PHP 5.2 → PHP 5.3)ではプログラムの互換性を損なう変更が行われる。バグフィックスリリース（例：PHP 5.3.4 → PHP 5.3.5)ではバグのみが修正される。 </td>
    </tr>
  </table>
  <br />
  <br />
  <input type="button" value="OK" onclick="func2()">

  <h2 id="seikai2"> </h2>
  <div class="kaisetsu">
 解答   3） PHPはプラットフォームの違いを完全に吸収しません。クロスプラットフォームで動作させるにはOSによってはサポートされていない関数やパスの記述方法などに注意が必要である。   </div>
 
   <hr>
   
 <p><span class="list-style1">■</span>問3
  PHPスクリプトの実行やPHPの動作について、誤っているものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R3" value="A"></td>
      <td>1.    まずスクリプトの構文分析が行われ、その後にスクリプトが必要とするモジュールがロードされて実行される。  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="B"></td>
      <td>2.    PHPスクリプトが実行を終了すると、開いたファイルやデータベース接続、確保したロックやメモリ領域、ネットワーク接続などのリソースはPHPが自動的に開放する。  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="C"></td>
      <td> 3.    設定によりスクリプトの実行前・実行後に自動的に実行するスクリプトを設定できる。   </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 4.    PHPのモジュールは動的にロードする事が可能だが、Web環境のように繰り返し同じ実行環境で利用すると問題となる場合がある。このためPHP 5.3からWeb環境では動的にロードできないように仕様変更された。  </td>
    </tr>
  </table>
 <br />
  <input type="button" value="OK" onclick="func3()">
<h3 id="seikai3"> </h3>
  <div class="kaisetsu">  
解答 
1） スクリプトで機能が利用されるかどうかに関わらず、PHPはシステムを初期化する段階でモジュールを読み込む。現在のPHPはモジュールをスクリプトからロードするdl関数はWeb実行環境からは実行できなくなっているが、コマンドラインなどではスクリプトからモジュールをロードすることは可能である。  </div>  
  
   <hr>
   
 <p><span class="list-style1">■</span> 問 4
  テキスト型（文字列型)について、誤っているものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R4" value="A"></td>
      <td>1.    "(ダブルコーテーション)と'（シングルコーテーション)で作成した文字列には違いは無いためどちらを使っても構わない。
</td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="B"></td>
      <td>2.      PHPの文字列型は文字エンコーディング情報などを持っていないためバイナリ型として利用できる。  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="C"></td>
      <td> 3.      Webフォームなど、Webブラウザからの入力は全てテキスト型のデータとしてPHPプログラムに渡される。  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 4.      PHPの文字列型データは論理値として扱うことが可能であり空文字列または数値の0は偽（FALSE)と評価される。  </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func4()">
<h4 id="seikai4"> </h4>
  <div class="kaisetsu">  
解答   1） &rdquo;（ダブルコーテーション）を使った場合は文字列に変数が含まれるかパースされ、変数が含まれる場合は変数の内容に置換される。この為、特に理由がない限り配列の添字や固定文字列には'(シングルコーテーション）を利用した方が速度的に有利である。 </div>
  
   <hr>

 <p><span class="list-style1">■</span> 問 5  数値型（整数型と浮動小数点型)について、正しいものを1つ次の記述の中から選択せよ。  
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R5" value="A"></td>
      <td>1.      浮動小数点型の場合、無限大と無限小の定義があり、オーバーフローの可能性に注意する必要はない。  </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="B"></td>
      <td>2.        数値型のデータと文字列型のデータはデータ型を意識すること無く比較する事ができる。  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="C"></td>
      <td> 3.        数値型のデータには整数型と浮動小数点型の2種類があり、整数型は実行環境によって符号付き32ビットまたは64ビット整数として処理される。浮動小数点型は常に倍精度の浮動小数点である。    </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 4.        指数表記の文字列であっても整数として扱える範囲（例：1.234E3)であれば整数型として扱われる。    </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func5()">
<h5 id="seikai5"> </h5>
  <div class="kaisetsu">  
解答   3） C言語のlong型が32ビット整数の実行環境（32ビット版のWindowsやLinux用にビルドされたPHP）では整数型は符号付き32ビット整数となる。long型が64ビット環境となる実行環境では符号付き64ビット整数となる。   </div>
   <hr>

 <p><span class="list-style1">■</span> 問 6
   配列型について、誤っているものを1つ次の記述の中から選択せよ。  <br>
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R6" value="A"></td>
      <td>1.  PHPの配列は順序を持ったハッシュとして実装されている。   </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="B"></td>
      <td>2.    配列を連結する加算演算子(+)とarray_merge関数は同じ動作を行う。  </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="C"></td>
      <td> 3.    配列の要素を指定する添字を省略して要素を追加した場合、今まで利用された整数型の添字の最大値より一つ大きい値を添字とした要素が作成される。   </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="D"></td>
      <td> 4.  整数として扱える文字列を添字とした場合、整数型の添字として扱われる。浮動小数点として扱える文字列は整数に変換される。   </td>
    </tr>
  </table><br>
<input type="button" value="OK" onclick="func6()">
<h6 id="seikai6"> </h6>
  <div class="kaisetsu">  
解答   2） array_mergeで配列を連結すると添字が振り直されますが、加算演算子で配列を連結すると添字が維持される。   </div>
 
 
</div>
</form>
</body>
</html>
