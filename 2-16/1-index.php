<?php
    $testFile = "1-1test.txt";
    $contents = "書き込み完了";
    
    if (is_writable($testFile)) {
        $fp = fopen($testFile, "a");
        fwrite($fp, $contents);
        fclose($fp);
        echo "書き込み";
    } else {
        echo "未完了";
        exit;
    }
    echo '<br>';

   $test_file = "1-2test.txt";
    
    if (is_readable($test_file)) {
        $fp = fopen($test_file, "r");
        while ($line = fgets($fp)) {
            echo $line.'<br>';
        }
        fclose($fp);
    } else {
        echo "未完了";
        exit;
    }