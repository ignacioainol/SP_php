<?php

    /* Getting file name */
    $filename = $_FILES['file']['name'];

    /* Location */
    $location = "files_upload/".$filename;
    $uploadOk = 1;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);

    /* Valid Extensions */
    $valid_extensions = array("jpg","jpeg","png","dat","csv");
    /* Check file extension */
    if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
        $uploadOk = 0;
    }

    if($uploadOk == 0){
        echo 0;
    }else{
    /* Upload file */
    if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
        setcookie('fileUploaded', $_FILES['file']['name'], time() + (86400 * 30), '/');
        echo $location;
    }else{
        echo 0;
    }
    }

    // if ($_FILES['fileUpload']){
    //     $fileTmpPath = $_FILES['fileUpload']['tmp_name'];
    //     $fileName = $_FILES['fileUpload']['name'];
    //     $fileSize = $_FILES['fileUpload']['size'];
    //     $fileType = $_FILES['fileUpload']['type'];
    //     $fileNameCmps = explode(".", $fileName);
    //     $fileExtension = strtolower(end($fileNameCmps));

    //     // $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    //     $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','dat');
    //     if (in_array($fileExtension, $allowedfileExtensions)) {
        
    //         $uploadFileDir = './files_upload/';

    //         if (!file_exists($uploadFileDir)){
    //             mkdir($uploadFileDir);
    //         }

    //         // echo getcwd();

    //         $dest_path = getcwd(). DIRECTORY_SEPARATOR . 'files_upload'. DIRECTORY_SEPARATOR . $fileName;
    //         // echo $dest_path;

    //         if(move_uploaded_file($fileTmpPath, $dest_path)){
    //             echo 'File is successfully uploaded.';
    //         }else{
    //             echo  'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
    //         }


    //     }
        

    // }

?>