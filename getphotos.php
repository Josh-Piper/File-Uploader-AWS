<!DOCTYPE html>
<html>
    <head>
        <title>AWS Photo Viewer</title>
        <meta name="description" context="AWS Photo Uploader and Receiver">
        <meta name="author" context="Joshua Piper StuID: 102678001">
        <meta charset="utf-8>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            * {margin-top: 0px; padding-top: 0px;}
            form {border: 1px solid black; padding: 10px; width: 90%;}
            form label {margin-bottom: 20px; display: block;}
            form label label {font-weight: bold; margin: 15px; display: inline;}
        </style>
    </head>
    <body>
    <h1>Photo Getter</h1>
        <h4>Student ID: 102678001</h4>
        <h4>Name: Joshua Piper</h4>
		<form>
    <label>
                <label for="photo--title">Photo title:</label>
                <input type="text" id="photo--title" name="photo-title">
            </label>
            <label>
                <label for="photo--keywords">Keywords:</label>
                <input type="text" id="photo--keywords" name="photo-keywords">
            </label>
            <label>
                <label for="photo--date">Date:</label>
                <input type="date" id="photo--date" name="photo-date">
            </label>
			<label><input type="submit" value="Find" style="margin: 0px;"> </label>
    </form>
    <a href="upload.php">Upload a Photo</a>
    </body>
</html>


<?php
    //origin-access-identity/cloudfront/E31MC8CVLOMYN9 
    //access-identity-102678001album.s3.amazonaws.com

    //dependecies
    require dirname(__FILE__).'./vendor/autoload.php';
    require_once './settings.php';


    $connection = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $connection -> error); 

    $title = $_POST["photo-title"];
    $keywords = $_POST["photo-keywords"];
    $date = $_POST["photo-date"];


    if (isset($_POST['submit'])) 
    {
        
        $query = "SELECT * FROM `photos` WHERE `title` LIKE %$title% AND `Keyword` LIKE %$keywords% AND `Date` LIKE %$date%";

        $result = mysqli_query($connection, $query);
        if (!Result) {

        } else {
            
            echo "<table>";
            echo "<tr>";
                echo "<td>Id</td>";
                echo "<td>Keywords</td>";
                echo "<td>Date</td>";
                echo "<td>Reference</td>";
            echo "</tr>";
            
               while ($row = mysql_fetch_array($query)) {
                   echo "<tr>";
                   echo "<td>".$row[title]."</td>";
                   echo "<td>".$row[Keyword]."</td>";
                   echo "<td>".$row[Date]."</td>";
                   echo "<td>"."Reference To S3 Bucket"."</td>";
                   echo "</tr>";
               }
            echo "</table>";

        }
    }

    $connection->close();


/*     //link to S3 bucket
    use AWS\S3\S3Client;
    $s3_client = new S3Client([
        'version' => 'latest',
        'region' => 'us-east-1'
    ]);

   
    



    //returning all objects in bucket
    try {
        $results = $s3->getPaginator('ListObjects', [
            'Bucket' => BUCKET
        ]);
    } catch (S3Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }

    foreach ($results as $result) 
    {

        if ($result['Contents'] != null) 
            {
                foreach ($result['Contents'] as $object) 
                {
                //$object['Key']: name of object in your bucket...
                }
            }
    }
    
    
    //Put result someone...
 */

?>