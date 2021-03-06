<?php

require_once "../my-config.php";
require_once "../models/database.php";
require_once "../models/accounts.php";

$validType = ['image/jpeg', 'image/jpg', 'image/png'];
$arrayErrors = [];

$uploaddir = "..\assets\img\img_blog/";

if (isset($_FILES['upload'])) {
    $fileName = $_FILES['upload']['tmp_name'];
    $extension = explode('.', $_FILES['upload']['name']); 
    $uploadfile = $uploaddir . uniqid() . '.' . end($extension);

    $fileToUpload = explode('/', $uploadfile);
    $fileToUpload = end($fileToUpload);
}


if (isset($_POST['publish'])) {

    if (!empty($_FILES['upload']['name'])) {

        $fileType = $_FILES['upload']['type'];

        if (!in_array($fileType, $validType)) {

            $arrayErrors["mime"] = "Votre téléchargement n'est pas une image";
        } else {
         
            $title = $_POST['title'];
            $content = $_POST['content'];
            $pictureName = $fileToUpload;
            $id = $_SESSION['id'];

            if (!empty($_FILES)) {
                move_uploaded_file($fileName, $uploadfile);
            }

            $publishObj = new Accounts();
            $publishObj->addPost($title, $content, $pictureName, $id);
        }
    } else {

        $title = $_POST['title'];
        $content = $_POST['content'];
        $id = $_SESSION['id'];

        $publishObj = new Accounts();
        $publishObj->addPostWithoutPicture($title, $content, $id);
    }
}
