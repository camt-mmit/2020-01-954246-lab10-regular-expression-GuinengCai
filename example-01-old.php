<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    $password = $_SERVER['argv'][1];

    // if(
    //     preg_match("/[A-Z]/", $password) &&
    //     preg_match("/\d/", $password) &&
    //     preg_match("/[\$@&]/", $password)
    // ) {
    //     printf("Matched constrains\n");
    // } else {
    //     printf("Not matched constrains\n");
    // }

    if(preg_match("/(?=.*[A-Z])(?=.*\d)(?=.*[\$@&])/", $password)) {
        printf("Matched constrains\n");
    } else {
        printf("Not matched constrains\n");
    }
