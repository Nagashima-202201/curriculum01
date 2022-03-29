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

<p>①の答え</p>
    <?php
    if ($number == 80) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
?>

<p>②の答え</p>
    <?php
    if ($web == "HTML") {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
    ?>

<p>③の答え</p>
    <?php
        if ($MySQL == 'select') {
            echo "正解！";
        } else {
            echo "残念・・・";
        }
        ?>