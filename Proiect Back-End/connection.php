<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "backend";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
 
if (isset($_POST["submit"]))
 {
    $marca = $_POST["marca"];

    $model = $_POST["model"];

    $pret = $_POST["pret"];

    $descriere = $_post["descriere"];
     
    $imagine = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    $tname = $_FILES["file"]["tmp_name"];
   
    $uploads_dir = 'images';

    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 

    $sql = "INSERT INTO `cars`(`id`, `marca`, `model`, `pret`, `descriere`, `imagine`) VALUES ('','','','','','')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}