<?php



$ID= $_GET["id"]or die("id error");


require "config.php";

$query = "DELETE FROM `user` WHERE ID = {$ID}";

$result = mysqli_query($conn, $query);

header("location:http://localhost:82/darkpan/user.php");

?>