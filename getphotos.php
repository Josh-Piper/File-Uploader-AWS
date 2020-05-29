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
                <input type="text" id="photo--title" name="photo--title">
            </label>
            <label>
                <label for="photo--description">Keywords:</label>
                <input type="text" id="photo--description" name="photo--description">
            </label>
            <label>
                <label for="photo--date">Date:</label>
                <input type="date" id="photo--date" name="photo--date">
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
    require './vendor/autoload.php';

    //link to S3 bucket
    use AWS\S3\S3Client;
    $s3_client = new S3Client([
        'version' => 'latest',
        'region' => 'us-east-1'
    ]);

    //uploading to a bucket
    use AWS\S3\MultipartUploader;
    use Aws\Common\Exception\S3Exception;
    
    //upload file to EC2 instance
    $is_file_uploaded = move_uploaded_file($_FILES['name_of_file']['tmp_name'], 
    dirname(__FILE__).'photos/your_file.png');

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
    
    require_once 'settings.php';

    $connection = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $connection -> error); 

    //Put result someone...


?>