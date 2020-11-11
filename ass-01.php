<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    $fp = fopen($_SERVER['argv'][1], 'r');
    fscanf($fp, "%d", $n);
    $passwords = [];
    for($i = 0; $i < $n; $i++) {
        $passwords[] = trim(fgets($fp));
    }
    fclose($fp);

    $pattern = "/(?=(.*[A-Z]){2})(?=(.*\d){2})(?=(.*[\$@&]){2})(?=.{8})(?!.*\s)/";

    $sats = array_filter($passwords, function($password) use($pattern) {
        return preg_match($pattern, $password);
    });

    $nsats = array_filter($passwords, function($password) use($pattern) {
        return !preg_match($pattern, $password);
    });

    $printResult = function($password) {
        printf("   %s\n", $password);
    };

    printf("Satisfied:\n");
    array_walk($sats, $printResult);
    printf("Non-satisfied:\n");
    array_walk($nsats, $printResult);
