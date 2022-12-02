<?php



include "config.php";


if(isset($_FILES["fileToUpload"])){

$error = array();

$filename = $_FILES['fileToUpload']["name"];
$filesize = $_FILES['fileToUpload']["size"];
$file_temp = $_FILES['fileToUpload']["tmp_name"];
$file_type = $_FILES['fileToUpload']["type"];
$file_ext = explode('.',"$filename");
$file_ext = end($file_ext);
$file_ext = strtolower($file_ext);
$extension = array("jpg","jpeg","png");

if(in_array($file_ext,$extension) === false)
{
    $error[] = "File extension must be jpeg ,jpg ,png";
}
if($filesize > 2097152)
{

    $error[] =  "file is must be less than 2 mb";
}
if(empty($error)==true)
{
    move_uploaded_file($file_temp,"upload/".$filename);
}
}


session_start();

$title = $_POST["products_title"];
$discription = $_POST["productsdesc"];
$category = $_POST["category"];
$date = date("d, M ,Y");
$author = $_SESSION["user_id"];



$query = "INSERT INTO `post`(`title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES ('{$title}','{$discription}',{$category},'{$date}','{$author}','{$filename}')";


mysqli_query($conn, $query);

header("location:http://localhost:82/darkpan/doctor.php
");


?>