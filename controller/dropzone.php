<?php
/**
 * Created by PhpStorm.
 * User: Benjamin Neu
 * Date: 17.01.14
 * Time: 16:20
 */

class Dropzone extends User_Controller {

    function upload()
    {

        if (!empty($_FILES))
        {
            $tempFile = $_FILES['file']['tmp_name'];
            $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
            $targetFile = $targetPath . $_FILES['file']['name'];
            move_uploaded_file($tempFile, $targetFile);
            // save data in database (if you like!)
        }
    }
}