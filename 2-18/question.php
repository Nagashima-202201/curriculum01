<link rel="stylesheet" href="Style.css">
<?php
$my_name = $_POST['my_name'];
$number= array("80","22","20","21");
$web= array("PHP","Python","JAVA","HTML");
$MySQL= array("join","select","insert","update");


?>
<form action="answer.php" method="post">
<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
	foreach( $number as $value ){
		echo "<input type=\"radio\" name=\"number\" value=\"{$value}\">";
        echo $value;
	}
	?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
	foreach( $web as $value ){
		echo "<input type=\"radio\" name=\"web\" value=\"{$value}\">";
		echo $value;
	}
	?>


<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
	foreach( $MySQL as $value ){
		echo "<input type=\"radio\" name=\"MySQL\" value=\"{$value}\">";
		echo $value;
	}
    echo '<br>';
	?>  
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
<input type="submit" value="回答する">
</form>