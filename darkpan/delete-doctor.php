<?php



$DID= $_GET["id"]or die("id error");


require "config.php";

$query = "DELETE FROM `doctor` WHERE DID = {$DID}";

$result = mysqli_query($conn, $query);

header("location:http://localhost:82/darkpan/doctor.php");

?>