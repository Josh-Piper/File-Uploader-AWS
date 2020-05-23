

<?php


//Listen for Submission.
if (isset($_POST['submit'])) {

    //Connect to Database
    $serverName = "localhost:8012";
    $username = "root";
    $password = "";
    $databaseName = "Images";
    //Handle SQL connection
    $connection = mysqli_connect($serverName, $username, $password, $databaseName) or die("unable to connect");

    //Render all values sent by form
    $title = $_POST['photo-title'];
    $description = $_POST['description-title'];
    $photo = $_POST['upload-photo'];
    $date = $_POST['date-title'];

    //Render unchecked form (validating /wOUT JS)
    if (empty($title)) throw new Exception("Title cannot be empty");
    if (empty($description)) throw new Exception("Description cannot be empty");
    if (empty($phto)) throw new Exception("Photo cannot be empty");
    if (empty($date)) throw new Exception("Date cannot be empty");

    //Upload to DB
    $uploads_dir = 'images/';
    //Add id to name? also increment ID. How to do thing
    $id = //GET CURRENT ID. Increment by one. If EMPTY. ID = 0. 
    $titleDuplication = rand(100,100)."-".$title;
    move_uploaded_file($title, $uploads_dir. '/')

    //Query to Insert (SQL)
    $sql = "INSERT INTO doSomething VALUES "

    if (mysqli_query($connection, $sql)) {
        echo "Successfully Uploaded!";
    } else {
        echo "Error";
    }
    //DATABASE NAME = Swinburne, TABLE NAME = images
    //codeflix -> fileup
    //database stores id, Title, Photo, Description and Date
}
\

?>