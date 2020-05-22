

<?php

//Connect to DB $db = mysqli_connect("IP", "username", "password", "dbname");
//$image = $_FILES['IMAGE']['NAME']; <--- Find a way to get image and text from form
//Post that content into sql
//$sql = "INSERT INTO ..."


$serverName = "localhost:8012";
$username = "root";
$password = "";
$databaseName = "Images";
$connection = mysqli_connect($serverName, $username, $password, $databaseName) or die("unable to connect");

echo "Great work!!";
//continue to next step


//upload successful then redirect?
//only accept images, jpg,png, jpeg , etc
//date validation


?>