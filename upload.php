<?php

    if ($_FILES['fileUpload']){
        $fileTmpPath = $_FILES['fileUpload']['tmp_name'];
        $fileName = $_FILES['fileUpload']['name'];
        $fileSize = $_FILES['fileUpload']['size'];
        $fileType = $_FILES['fileUpload']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','dat');
        if (in_array($fileExtension, $allowedfileExtensions)) {
        
            $uploadFileDir = './files_upload/';

            if (!file_exists($uploadFileDir)){
                mkdir($uploadFileDir);
            }

            // echo getcwd();

            $dest_path = getcwd(). DIRECTORY_SEPARATOR . 'files_upload'. DIRECTORY_SEPARATOR . $fileName;
            // echo $dest_path;

            if(move_uploaded_file($fileTmpPath, $dest_path)){
                echo 'File is successfully uploaded.';
            }else{
                echo  'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
            }


        }
        

    }

?>