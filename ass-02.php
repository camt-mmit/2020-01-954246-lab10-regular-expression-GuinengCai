<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    $fp = fopen($_SERVER['argv'][1], 'r');
    $text = '';
    while(!feof($fp)) {
        $text .= fread($fp, 1024);
    }
    fclose($fp);

    $pattern = "/\b\d+(\.\d+)?\b/";

    preg_match_all($pattern, $text, $results);

    array_walk($results[0], function($result) {
        printf("%s\n", $result);
    });
