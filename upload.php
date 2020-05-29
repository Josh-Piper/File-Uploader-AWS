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

        <form>
            <label>
                <label for="photo--title">Photo title:</label>
                <input type="text" id="photo--title" name="photo--title">
            </label>
            <label>
                <label for="photo--file">Select a photo: </label>
                <input type="file" id="photo--file" name="photo--file">
            </label>
            <label>
                <label for="photo--description">Description:</label>
                <input type="text" id="photo--description" name="photo--description">
            </label>
            <label>
                <label for="photo--date">Description:</label>
                <input type="date" id="photo--date" name="photo--date">
            </label>
            <label><label>Keywords (seperated by a semicolon, e.g. keyword1; keyword2;)</label></label>
			<label><input type="submit" value="Upload" style="margin: 0px;"> </label>
        </form>
        <br>
        <a href="getphotos.php">Photo Album</a>
</html>


<?php

   require './vendor/autoload.php';

?>