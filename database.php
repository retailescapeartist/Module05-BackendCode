<?php
header('Location: index.php');
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "warranty and maintenance system";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$email = $_POST["email"];
$phone = $_POST["phone"];


//connect database
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "INSERT INTO customer (first, last, address, email, phone)
VALUES ('$fname', '$lname', '$address', '$email', '$phone')";

    if($conn->query($sql) === TRUE) {
        echo "Success!";
    }
    else {
        echo "Failure: ". $sql . "<br>" . $conn->error;
    }
$conn->close();
?>

