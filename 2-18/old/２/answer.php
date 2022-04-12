<link rel="stylesheet" href="Style.css">
<?php 
$my_name = $_POST['my_name'];
$number = $_POST['number'];
$web = $_POST['web'];
$MySQL = $_POST['MySQL'];
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>

<?php
//ユーザー定義関数の作成
function true(){
 echo "正解！<br/>\n";
}
function forse(){
 echo "残念・・・<br/>\n";
}
?>
<p>①の答え</p>
    <?php
    if ($number == 80) 
     $answer = 'true';
     else $answer = 'forse';

     if(function_exists($answer))
     $answer();
    ?>

<p>②の答え</p>
    <?php
    if ($web == "HTML") 
     $answer = 'true';
     else $answer = 'forse';

     if(function_exists($answer))
     $answer();
    ?>

<p>③の答え</p>
    <?php
    if ($MySQL == "select") 
     $answer = 'true';
     else $answer = 'forse';

     if(function_exists($answer))
     $answer();
    ?>


