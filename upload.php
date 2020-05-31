<!DOCTYPE html>
<html>
    <head>
        <title>AWS Photo Uploader</title>
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
        <h1>Photo uploader</h1>
        <h4>Student ID: 102678001</h4>
        <h4>Name: Joshua Piper</h4>

        <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
            <label>
                <label for="photo--title">Photo title:</label>
                <input type="text" id="photo--title" name="photo-title">
            </label>
            <label>
                <label for="photo--file">Select a photo: </label>
                <input type="file" id="photo--file" name="photo-file">
            </label>
            <label>
                <label for="photo--description">Description:</label>
                <input type="text" id="photo--description" name="photo-description">
            </label>
            <label>
                <label for="photo--date">Description:</label>
                <input type="date" id="photo--date" name="photo-date">
            </label>
            <label><label for="keywords">Keywords (seperated by a semicolon, e.g. keyword1; keyword2;)</label><input type="text" name="photo-keyword" id="photo--keyword"></label>
			<label><input type="submit" value="Upload" style="margin: 0px;"> </label>
        </form>
        <br>
        <a href="getphotos.php">Photo Album</a>
</html>


<?php

  
    //get mySQL credentials
   require_once 'settings.php';

   //login to MySQL +/ Return error if needed
   $connection = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $connection -> error); 
    
   
   //title, Description, Date, Keyword, Reference
    if (isset($_POST['submit'])) 
    {
        $query = "INSERT INTO photos (title, Description, Date, Keyword, Reference)
        VALUES ('".$_POST["photo-title"]."','".$_POST["photo-description"]."','".$_POST["photo-date"]."','".$_POST["photo-keyword"]."')";
        


  /*       require dirname(__FILE__).'./vendor/autoload.php';

        use Aws\S3\S3Client;
        $s3_client = new S3Client([
            'version' => 'latest',
            'region' => 'us-east-1'
        ]);

          //uploading to a bucket
        use Aws\S3\MultipartUploader;
        use Aws\Common\Exception\S3Exception;
        
        //upload file to EC2 instance
        $is_file_uploaded = move_uploaded_file($_FILES['name_of_file']['tmp_name'], 
        dirname(__FILE__).'uploads/your_file.png');

        if ($is_file_uploaded) {
            $uploader = new MultipartUploader(
                $s3_client,
                dirname(__FILE__).'photos/your_file.png',
                ['bucket' => '102678001album', 'key' => 'object-name']);
            try {
                $result = $uploader->upload();

            } catch (S3Exception $e) {
                echo $e->getMessage() . PHP_EOL;
            }
        }
    }
 */
  
        
?>