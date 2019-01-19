<?php

/* to test this locally you will need to download MAMP (MYSQL, Apache, Mac, and PHP)
You will also need to create a database with all of the below information (or a different one and change it)
The way that I see this application working is as something that can be thrown on a subdomain of somebody's website and just exist as an anonymous sort of application that people can use. I mean somebody could have this as thier main application on a webiste, but it works better within smaller communities, I think. I don't really know. */

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>