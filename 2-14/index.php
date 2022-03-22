<?php
$members = ["A", "BB", "CCC", "DDDD"];

echo count($members);
echo '<br>';

sort($members);
var_dump($members);
echo '<br>';

var_dump(in_array("CCC", $members));
echo '<br>';

if (in_array("A", $members)) {
    echo "Aがいるよ！";
} else {
    echo "Aはいないよ！";
}
echo '<br>';

$atstr = implode("★", $members);
var_dump($atstr);
echo '<br>';

$re_members = explode("★", $atstr);
var_dump($re_members);