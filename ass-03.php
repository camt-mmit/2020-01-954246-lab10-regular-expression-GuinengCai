<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    $fp = fopen($_SERVER['argv'][1], 'r');
    $content = '';
    while(!feof($fp)) {
        $content .= fread($fp, 4096);
    }
    fclose($fp);
    
    preg_match_all("/\(([A-Z]+)\)/", $content, $matchs);
    
    foreach($matchs[1] as $abbr) printf("%s\n", $abbr);
