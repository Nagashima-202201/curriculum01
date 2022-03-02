<?php
    $x = 5.3;

    echo ceil($x);
    echo '<br>';
    echo floor($x);
    echo '<br>';
    echo round($x);
    echo '<br>';
?>

<?php
    echo pi();
    
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }

    circleArea(5);
    echo '<br>';
?>

<?php
    echo mt_rand(1, 100);
    echo '<br>';
?>

<?php
    $str = "nagashima kanae";

    echo strlen($str);
    echo '<br>';
    echo strpos($str, "a");
    echo '<br>';
    echo substr($str, -2, 2);
    echo '<br>';
    echo str_replace("na", "NA", $str);
    echo '<br>';
    echo str_replace(" ", "", $str);
    echo '<br>';
?>

<?php
    $str = "あいうえお";
    
    echo mb_strlen($str);
    echo '<br>';
?>

<?php
    $name = "永島";
    $limit_hour = 1;
    $limit_minute = 25;
    $price = 5000; 
    
    printf("%sさんはあと%02d時間%02d分で%d円の罰金です。", $name, $limit_hour, $limit_minute, $price);
?>