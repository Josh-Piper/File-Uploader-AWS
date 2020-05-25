<?php

    //Connect to Database
    function ConnectToDatabase() 
	{
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "swinburne";
    return mysqli_connect($serverName, $username, $password, $databaseName);
    }

    //Render unchecked form (validating /wOUT JS)
    function CheckLegitimateValues(array $value) {
        foreach ($value as $item)
        {
            if (empty($item)) throw new Exception("$item cannot be empty");
        }
    }


if (isset($_POST['submit'])) {
    print_r("got to submitting");
    $connection = ConnectToDatabase();
    if ($connection) {
        echo "Horray";
    }
}



//MAIN PROGRAM HERE


//Handle Database connection
if (!($connection = ConnectToDatabase())) {
    echo "Failed to connection to Database";
}
//Listen for Submission.
if (isset($_POST['submit'])) {




    //Render all values sent by form
    $title = $_POST['photo-title'];
    $description = $_POST['description-title'];
    $photo = $_POST['upload-photo'];
    $date = $_POST['date-title'];

    $checkArray = [$title, $description, $photo, $date];
    CheckLegitimateValues($checkArray);

    //Check for only image types
    $allowed = array('gif', 'jpeg', 'jpg', 'png');

	
	$extentionFile = pathinfo($photo, PATHINFO_EXTENSION);
	echo $extentionFile;
    if (!in_array(strtolower($extentionFile), $allowed)) {
        echo "Invalid file format, only images allowed";
        exit();
    }


    //Search for id for query
    $query = "SELECT * FROM images";
	
	
    if (!($result = mysqli_query($connection, $query))) {
		$id = 0;
    } else {
		$num_rows = mysqli_num_rows($result);
        $id = $num_rows++;
    }

    //Upload to DB
    $target = '/pictures';
    $target = $target . basename($photo);
    move_uploaded_file($_FILES['file']['tmp_name'], $target);
    //NEED TO DO
    //move_uploaded_file($titleDuplication, $uploads_dir. '/')

    //Query to Insert (SQL)
    $sql = "INSERT INTO images(id, Title, Photo, Description, DateTaken) VALUES('$title', '$description', '$photo', '$date') ";

    if (mysqli_query($connection, $sql)) {
        echo "Successfully Uploaded!";
    } else {
        echo "Error";
    }

}

?>