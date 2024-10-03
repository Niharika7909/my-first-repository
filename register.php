<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practicedb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);

    {
    $rollno = $_POST['rollno'];
    $fullname = $_POST['fullname'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
   $stmt = $conn->prepare("INSERT INTO `user` (`ID`, `Name`, `Branch`, `Year`, `date`) VALUES (?, ?, ?, ?, current_timestamp())");
    $stmt->bind_param("ssss", $rollno, $fullname, $branch, $year);
    if ($stmt->execute() === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $stmt->error;
    }

$stmt->close();
$conn->close();
    }
?>