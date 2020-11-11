<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    /**
     * In this assignment, we must join all lines together.
     * So we use file pointer instead of file_get_contents().
     * Or, we can still use file_get_contents() and help of
     * preg_replace().
     */
    $fp = fopen($_SERVER['argv'][1], "r");
    $contents = [];
    while(!feof($fp)) {
        $contents[] = trim(fgets($fp));
    }
    
    fclose($fp);
    
    $content = trim(implode(" ", $contents));
    preg_match_all("/\b[A-Z][a-z]+(\s+[A-Z][a-z]+)*\b/", $content, $matchs);
    
    foreach($matchs[0] as $name) {
        if(!in_array($name, ["My", "The"])) printf("%s\n", $name);
    }
