<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>PHP技術者認定・初級-07</title>
<script src="http://jquery.com/src/jquery-latest.js"></script>
<script type="text/javascript" src="../js/jquery-172.js"></script>
<script type="text/javascript" src="../js/winet-76.js"></script>
<script type="text/javascript">
function func1() {   i=1; n=  0;  func0();	}  //問1	 
function func2() {  i=2; n = 0 ; func0();	} 	//問2		
function func3() { i=3; n = 4 ; func0();} //問3		
function func4() {i=4; n = 3 ; func0();} //問4		
function func5() {   i=5 ; n = 1 ; func0();	} 	//問5		
function func6() {  i=6 ; n = 2 ; func0();	} //Q6

</script>
<link href="../php_doc/css/un-76.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="F1" action="#">
<div class="demo-show">
  <p><span class="list-style1">■</span> 問1
        日時の表示関数について誤っているものを1つ次の記述の中から選択せよ。    </p> 
  【語群】<br />
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R1" value="1"></td>
      <td width="96%"> 1.　日付や時刻を表示するための関数には、date()やstrtotime()がある。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="2"></td>
      <td> 2.　date()関数は引数を2つ取る。1つ目は日時の表示フォーマットで、2つ目は対象日時である。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R1" value="3"></td>
      <td> 3.　strftime()関数は%dなどのフォーマット文字列を使うので、日時以外の文字列を簡単に含めることができる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R1" value="4"></td>
      <td> 4.　date()関数はうるう年などのサポートもしており、表記法の幅が広い。また、フォーマットがOSに依存しない利点もある。 </td>
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
    <br>
1)　    strtotime(）関数は、日時文字列をtime形式に変換する関数である。   <br>
  </div>

  <hr>
  
  
  <p><span class="list-style1">■</span>問 2 　2011年5月4日午前3時21分ちょうどに、現在日時が「2011年5月4日 03:21:00」と表示されるものを1つ次の中から選択せよ。  </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R2" value="A"></td>
      <td width="96%"> 1.　echo date('Y年n月j日 H:i:s'); </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="B"></td>
      <td> 2.　echo date('Y年m月d日 H:i:s'); </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="C"></td>
      <td> 3.　echo date('Y年m月d日 HH:ii:ss'); </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R2" value="D"></td>
      <td> 4.　echo strftime('%Y年%m月%e日 %H:%M:%S'); </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R2" value="E"></td>
      <td> 5.　echo strftime('%Y年%M月%E日 %H:%I:%S'); </td>
    </tr>
    </table>
  <br />
  <br />
  <input type="button" value="OK" onclick="func2()">

  <h2 id="seikai2"> </h2>
  <div class="kaisetsu">
 解答   <strong id="kai2"> </strong>） <br>
各コードの実行結果は以下の通り。
  <br>
2）
2011年05月04日 03:21:00<br>
<br>
3） 
2011年05月04日 0303:2121:0000<br>
｛strftime()は、第2引数で指定されたタイムスタンプを第1引数で指定したフォーマット文字によってフォーマット（整形）し、整形後の文字列を返します。 ｝ <br>
4）
// Windowで実行した場合。  <em>Windows 限定:</em> <em>%e</em> 修飾子は Windows 版の実装ではサポートされていません。この値を取得するにはかわりに <em>%#d</em> 修飾子を使いましょう。以下の例で、 クロスプラットフォーム対応の関数を書く方法を示します。 <br>
2011年05月%e日 03:21:00<br>
<br>
5） 
// Windowで実行した場合<br>
2011年21月%E日 03:03:00  </div>
 
   <hr>
   
 <p><span class="list-style1">■</span>問3　    今年の母の日の日付を求めるコードについて、コード内の[（1)]-[（2)]-[（3)]の部分に入る正しい関数の組み合わせを1つ次の記述の中から選択せよ（母の日は5月の第2日曜日であるとする)。  <br>
   <br>
$may_1 = [（1)](0, 0, 0, 5, 1, 2011);<br>
$may_1st_sunday = [（2)]('sunday', $may_1);<br>
$mothers_day = [（3)]('+1 week', $may_1st_sunday);<br>
echo date('Y/m/d', $mothers_day); </p>
【語群】<br>
  <table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R3" value="A"></td>
      <td width="96%"> 1.　date-strtotime-mktime </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="B"></td>
      <td> 2.　strtotime-mktime-mktime </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="C"></td>
      <td> 3.　mktime-strtotime-date </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R3" value="D"></td>
      <td> 4.　date-strtotime-strtotime </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R3" value="E"></td>
      <td> 5.　mktime-strtotime-strtotime </td>
    </tr>
  </table>
 <br />
  <input type="button" value="OK" onclick="func3()">
<h3 id="seikai3"> </h3>
  <div class="kaisetsu">  
解答 <strong id="kai3"> </strong>）   <br>
// 5月1日の日時を取得する<br>
mkdir(0, 0, 0, 5, 1, 2011）;<br>
// 5月の第一日曜日を取得する<br>
strtotime('sunday', $may_1）;<br>
// 5月の第二日曜日を取得する<br>
strtotime('+1 week', $may_1st_sunday）; <br>
<br>
  </div>  
  
   <hr>
   
 <p><span class="list-style1">■</span> 問 4
      PHPのファイル関数について、誤っているものを１つ次の記述の中から選択せよ。  </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R4" value="A"></td>
      <td width="96%"> 1.　PHPにはフェイルセーフ対策としてファイルを開けるディレクトリのトップディレクトリを指定できるopen_basedir設定がある。PHPのファイル関数は設定されたディレクトリ以下のパスでなければ開くことができない。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="B"></td>
      <td> 2.　open_basedirはアクセス可能ディレクトリを指定、safe_modeはファイルの所有者やグループ情報を参照してアクセスを制御する仕組みである。PHPが制御しているため制限を回避できる場合も多い。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R4" value="C"></td>
      <td> 3.　リモートファイルへのアクセスはphp.ini設定によって利用可能か設定できる。fopenラッパーがサポートしていればリモートファイルのみでなく圧縮ファイルなどへも透過的にアクセスできる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R4" value="D"></td>
      <td> 4.　PHP 5.3.5からファイルのパス名に含まれるヌル文字のチェックが導入された。このチェックはファイルへの不正アクセスを防ぐ為には非常に役立つセキュリティ上の機能向上である。 </td>
    </tr>
  </table>
  <br />
  <input type="button" value="OK" onclick="func4()">
<h4 id="seikai4"> </h4>
  <div class="kaisetsu">  
解答   <strong id="kai4"> </strong>）<br>
1） 2） open_basedir, safe_modeを利用するとスクリプトに不備があった場合の被害を最小限に留めるフェイルセーフ機能として有用である。しかし、safe_modeは誤解される事が多いため、次のメジャーまたはマイナーリリースバージョンアップで廃止される予定である。<br>
<br>
3） 圧縮用のラッパーなどは標準で用意されており圧縮ファイルに透過的にアクセスできる。 <br>
<br>
  </div>
  
   <hr>

 <p><span class="list-style1">■</span> 問 5              ファイル操作について誤っているものを1つ次の記述の中から選択せよ。    </p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td><input type="radio" name="R5" value="A"></td>
      <td> 1.　file_get_contents()はローカルファイルでもリモートファイルでも取得することができる。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="B"></td>
      <td> 2.　file_put_contentsはローカルファイルには保存できるが、リモートファイルには保存できない。 </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R5" value="C"></td>
      <td> 3.　リモートURLで画面を取得して利用することをスクリーンスクレイピングという。手軽な反面、画面の変更時に不具合が出やすいことと、再利用権の確認が必要なので注意すること。 </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R5" value="D"></td>
      <td> 4.　セキュリティや操作性などの理由から、データ管理には主にデータベースが使われており、ファイルを使用しているシステムはほとんどないが、その技術を知ることは重要である。 </td>
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
<br>
2） 
  file_put_contents(）関数は、FTP接続を利用して、リモートのファイルにもデータの書き出しができる。 <br>
  <br>
  </div>
   <hr>

 <p><span class="list-style1">■</span> 問 6
               書き込み用のファイルの開き方について正しいものを1つ次の記述の中から選択せよ。        <br>
</p>
【語群】<br>
<table border="0" cellpadding="5">
    <tr class="td1">
      <td width="4%"><input type="radio" name="R6" value="A"></td>
      <td width="96%"> 1.　$fh = fopen('logs\user001.log'); </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="B"></td>
      <td> 2.　$fh = fopen('logs\user001.log', 'rb'); </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="C"></td>
      <td> 3.　$fh = fopen('user001.log', 'wb+'); </td>
    </tr>
    <tr class="td2">
      <td><input type="radio" name="R6" value="D"></td>
      <td> 4.　fget('user001.log', 'r'); </td>
    </tr>
    <tr class="td1">
      <td><input type="radio" name="R6" value="E"></td>
      <td> 5.　fgets('user001.log', 'r'); </td>
    </tr>
  </table>
<br>
<input type="button" value="OK" onclick="func6()">
<h6 id="seikai6"> </h6>
  <div class="kaisetsu">  
解答   <strong id="kai6"> </strong>）  <br>
<br>
ファイルパスに「\」を使用する場合、「\\」のようにエスケープする必要がある。   <br>
  </div>
 
 
</div>
</form>
</body>
</html>
