<?php

    // echo $_COOKIE['fileUploaded'];

    $file = fopen('./files_upload/'. $_COOKIE['fileUploaded'], 'r');

    while (($line = fgetcsv($file)) !== FALSE) {
        //$line is an array of the csv elements
        echo "<pre>";
        print_r($line[13]);
        echo "</pre>";
        
    }
    
    fclose($file);

    // $file = file_get_contents('./files_upload/'.$_COOKIE['fileUploaded']);

    // $contents = file('./files_upload/'.$_COOKIE['fileUploaded']);

    // foreach($contents as $line){
    //     echo $line[4];
    // }

?>