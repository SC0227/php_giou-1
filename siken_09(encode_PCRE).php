<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>PHP技術者認定・初級-08</title>
<script src="http://jquery.com/src/jquery-latest.js"></script>
<script type="text/javascript" src="../js/jquery-172.js"></script>
<script type="text/javascript" src="../js/winet-76.js"></script>
<script type="text/javascript">
function func1() {   i=1; n=  0;  func0();	}  //問1	 
function func2() {  i=2; n = 3 ; func0();	} 	//問2		
function func3() { i=3; n = 2 ; func0();} //問3		
function func4() {i=4; n = 4 ; func0();} //問4		
function func5() {   i=5 ; n = 1 ; func0();	} 	//問5		
function func6() {  i=6 ; n = 3 ; func0();	} //Q6

</script>
<link href="../php_doc/css/un-76.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="F1" action="#">
<div class="demo-show">
  <p><span class="list-style1">■</span> 問1 
          日本語文字コードのエンコーディング変換を行うために、正しいステートメントを1つ次の記述の中から選択せよ。<br>
          <br>
        ただし、内部エンコーディングの文字列が代入された変数 $text をシフトJISで標準出力するものとする。 </p> 
  【語群】<br />
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R1" value="1"></td>
      <td width="96%"> 1.　print mb_convert_encoding($text, 'SJIS'); </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="2"></td>
      <td> 2.　print mb_detect_encoding($text, 'SJIS'); </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="3"></td>
      <td> 3.　print mb_replace_encoding($text, 'SJIS'); </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="4"></td>
      <td> 4.　print mb_substring($text, 'SJIS'); </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="5"></td>
      <td> 5.　print mb_ereg_replace($text, 'SJIS'); </td>
    </tr>
  </table>
  <br />
<?php
    echo "<input type='hidden' R1.value />\n"; ?>
  <input type="button" value="OK" onclick="func1()">
   
  

  <h1 id="seikai1"> </h1>
  <div class="kaisetsu">解 <strong id="kai1"> </strong>)<br>
    <br>
mbstring拡張モジュールに含まれる、mb_convert_encoding(）関数がマルチバイトに対応した文字コードのエンコーディング変換を行う。<br>
ここでは、元の文字コードのエンコーディングはデフォルトの自動判別にしてあるが、実際には正しいエンコーディングを明示することが望ましい。  <br>
  </div>

  <hr>
  
  
  <p><span class="list-style1">■</span>問 2 　    以下のコードは桃家タローさん宛てにメールを送るためのものである。コード内の[（1）]に入る正しいものを1つ次の記述の中から選択せよ。<br>
    <br>
    ただし、PHPの言語設定や内部文字エンコーディングは環境に合わせて日本語で適切に動作するよう設定されているものとする。  <br>
    &lt;?php<br>
     $name = "桃家タロー";<br>
     $to = [（1）]($name) . "&lt;php-taro@example.jp&gt;";<br>
     $subject = "ご挨拶";<br>
     $message = "はじめまして、$name さん";<br>
     mb_send_mail($to, $subject, $message);<br>
    ?&gt; <br>
  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R2" value="A"></td>
      <td width="96%"> 1.　iconv_substr </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="B"></td>
      <td> 2.　mb_convert_encoding </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="C"></td>
      <td> 3.　base64_encode </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="D"></td>
      <td> 4.　mb_encode_mimeheader </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="E"></td>
      <td> 5.　mb_ereg_replace </td>
    </tr>
    </table>
  <br />
  <br />
  <input type="button" value="OK" onclick="func2()">

  <h2 id="seikai2"> </h2>
  <div class="kaisetsu">
 解答   <strong id="kai2"> </strong>） <br>
1）のiconv_substrは文字列から一部を切り出す関数である。<br>
2）のmb_convert_encodingは、文字エンコーディングを変換する関数である。<br>
3）のbase64_encodeは、文字列をBase64でエンコードする関数である。mb_ereg_replaceは、文字列を正規表現で置換する関数である。 <br>
4）mb_send_mail(）関数は、件名($subject）と本文($body）は自動的に適切な文字エンコーディング(ISO-2022-JP）に変換するが、宛先($to）やヘッダー(第4引数）は変換しない。このため、mb_encode_mimeheader(）関数にてMIMEヘッダーエンコードを行う必要がある。   </div>
 
   <hr>
   
 <p><span class="list-style1">■</span>問3　        PHPがマルチバイト文字列の処理を行う際の内部エンコーディングをUTF-8にしたい場合に、php.iniでmbstringのディレクティブとして指定する正しいものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R3" value="A"></td>
      <td width="96%"> 1.　mbstrig.language = UTF-8 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="B"></td>
      <td> 2.　mbstring.encoding_translation = UTF-8 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="C"></td>
      <td> 3.　mbstring.internal_encoding = UTF-8 。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 4.　mbstring.input_handler = UTF-8 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="E"></td>
      <td> 5.　mbstring.convert_encoding = UTF-8 </td>
    </tr>
  </table>
 <br />
  <input type="button" value="OK" onclick="func3()">
<h3 id="seikai3"> </h3>
  <div class="kaisetsu">  
解答 <strong id="kai3"> </strong>）   <br>
[mbstring]<br>
mbstring.language = Japanese<br>
mbstring.internal_encoding = UTF-8<br>
mbstring.http_input = auto<br>
mbstring.http_output = UTF-8<br>
mbstring.script_encoding = UTF-8<br>
mbstring.encoding_translation = On<br>
output_handler = mb_output_handler <br>
<br>
PHPがマルチバイト文字列の処理を行う際の内部エンコーディングは、mbstring.internal_encoding で指定するのが正しい。外部から取り込んだ日本語の文字列は、文字エンコーディングが違っていることがあるので、このディレクティブで指定した文字エンコーディングに変換してから処理を行う。  <br>
  </div>  
  

   <hr>
   
 <p><span class="list-style1">■</span> 問4&nbsp; &nbsp;次のPCRE正規表現関数を使ったコードの出力として、正しいものを1つ次の記述の中から選択せよ。  <br>
&lt;?php<br>
$string = 'Feb 21, 2011';<br>
$pattern = '/(\w+) (\d+), (\d+)/i';<br>
$replacement = '${3}-${1}-${2}';<br>
echo preg_replace($pattern, $replacement, $string);<br>
?&gt;</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R4" value="A"></td>
      <td width="96%"> 1.　2011 Feb 21, </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="B"></td>
      <td> 2.　2011 Feb, 21 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="C"></td>
      <td> 3.　2011/2/21 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 4.　{2011}-{Feb}-{21} </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 5.　2011-Feb-21 </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func4()">
<h4 id="seikai4"> </h4>
  <div class="kaisetsu">  
解答   <strong id="kai4"> </strong>）<br>
preg_replace(）関数は、<a href="http://www.kt.rim.or.jp/~kbk/regex/regex.html#DIGIT">正規表現</a>検索をして置換を行う。<br>
PCREの検索を行うパターンでは、(\w+）はアルファベット文字列、(\d+）は数字文字列をあらわす。<br>
+は１回以上の繰り返し。iは<a href="http://php.net/manual/ja/reference.pcre.pattern.modifiers.php">パターン修飾子</a>（  iパターンの中の文字は 大文字にも小文字にもマッチします。  ）<br>
<br>
置換を行う文字列では、${1}は最初のパターンにマッチした文字列、${2}は2つ目、${3}は3つ目となる。<br>
この問題では、検索でマッチしたパターンを順番を換えて、'-'で繋いで出力している。  <br>
<br>
  </div>
  
   <hr>

 <p><span class="list-style1">■</span> 問 5&nbsp; PHPの正規表現関数について、正しいものを1つ次の記述の中から選択せよ。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R5" value="A"></td>
      <td> 1.　文字列の照合には、できるだけPOSIX正規表現関数を利用するほうがよい。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="B"></td>
      <td> 2.　PCRE は、マッチするパターンが最初に見つかった時点で処理を終える。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="C"></td>
      <td> 3.　PCRE 拡張モジュールには大文字小文字を区別しない照合専用の関数がある。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 4.　PCRE 正規表現関数では、大文字小文字を区別する照合ができない。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="E"></td>
      <td> 5.　PCREはPHPでのみ有効な独自のパターン構文を持つ正規表現モジュールである。 </td>
    </tr>

  </table>
  <br />
  <input type="button" value="OK" onclick="func5()">
<h5 id="seikai5"> </h5>
  <div class="kaisetsu">  
解答  <strong id="kai5"> </strong>）<br>
1） POSIX正規表現関数はphp 5.3以降非推奨のため、使用を避けるべきある。 <a href="http://php.net/manual/ja/reference.pcre.pattern.posix.php">PCRE,POSIX違い</a><br>
2）PCREはPerlの互換の正規表現モジュールである。POSIXではマッチしたなかで一番長い文字列を探すが、PCREでは最初に見つかった時点で処理を終える。  <br>
3）,4） PCREには大文字小文字を区別しない照合専用の関数はなく、パターン修飾子を使って表現することがでる。<br>
5）PCREは、POSIX正規表現とは異なる、Perl互換のパターン構文の拡張を使う正規表現モジュールである。 <br>
  <br>
  </div>
   <hr>

 <p><span class="list-style1">■</span> 問 6　 PDOについての説明で、誤っているものを1つ次の記述の中から選択せよ。            <br>
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R6" value="A"></td>
      <td width="96%"> 1.　PDOは拡張モジュールで、データベースアクセスのための軽量で高速なオブジェクトである。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="B"></td>
      <td> 2.　PDOは共通のインターフェースを提供し、DBMSごとにドライバを切り替えることでデータベースを変更でき、移植性が高い。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="C"></td>
      <td> 3.　PDOはプレースホルダを用いたプリペアドステートメントをサポートし、セキュリティリスクを低減する。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="D"></td>
      <td> 4.　PDOはデータベースの抽象化を行いSQL を書き直したり、 存在しない機能はエミュレートする。 </td>
    </tr>
  </table>
<br>
<input type="button" value="OK" onclick="func6()">
<h6 id="seikai6"> </h6>
  <div class="kaisetsu">  
解答   <strong id="kai6"> </strong>）  <br>
PDO(PHP Data Objects ） は、PECL 拡張モジュールとして使用可能で、軽量で高速である。<br>
データベースサーバにアクセスするには、 DBMSごとのドライバ を使用する必要がある。<br>
PDOがサポートするプレースホルダを用いたプリペアドステートメントを使うことでセキュリティのリスクを減らすことができる。<br>
しかしながら、PDOはデータアクセスの抽象化レイヤを提供するのみで、データベースの抽象化までは行わない（SQL の書き直しや存在しない機能のエミュレートはしない）。  <br>
  </div>
 
 
</div>
</form>
</body>
</html>
