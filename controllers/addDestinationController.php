<?php


require_once('../my-config.php');
require_once('../models/database.php');
require_once('../models/destination.php');


$uploaddir = "..\assets\img\img_destinations/";

var_dump($_POST);

if (isset($_FILES['picture'])) {
    $fileName = $_FILES['picture']['tmp_name'];
    $extension = explode('.', $_FILES['picture']['name']); // utiliser le mime type plutot que l'explode
    $uploadfile = $uploaddir . uniqid() . '.' . end($extension); // faudra changer ici aussi

    $fileToUpload = explode('/', $uploadfile);
    $fileToUpload = end($fileToUpload);
}


if (!empty($_FILES)) {
    move_uploaded_file($fileName, $uploadfile);
}

$destinationObj = new Destinations();
$destinationArray = $destinationObj->getCategories();

$activitiesObj = new Destinations();
$activitiesArray = $activitiesObj->getAllActivities();

if (isset($_POST['addDestination'])) {


    $picture = $fileToUpload;
    $title = $_POST['title'];
    $descr = $_POST['content'];
    $cityCode = $_POST['cityCode'];
    $iframe = $_POST['iframe'];
    $category = $_POST['category'];

    $addObj = new Destinations();
    $addArray = $addObj->addDestination($picture, $title, $descr, $cityCode, $iframe, $category);

    
    foreach ($activitiesArray as $catch) {

        if (isset($_POST[$catch['act_name']])) {

            $activity = $catch['act_name'];

            $selectedObj = new Destinations();
            $selectedObj->addActivities($activity);
        }
    }
}
