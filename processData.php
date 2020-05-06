<?php

    // echo $_COOKIE['fileUploaded'];

    $file = file_get_contents('./files_upload/'.$_COOKIE['fileUploaded']);

    $contents = file('./files_upload/'.$_COOKIE['fileUploaded']);

    foreach($contents as $line){
        echo $line[1];
    }

?>