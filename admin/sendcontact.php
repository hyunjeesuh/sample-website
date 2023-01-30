<?php

require "dbcon.php";

$stremail = "";
$submitdate = "";
$strmessage = "";

$stremail = $_POST['email'];
$submitdate = $_POST['submitdate'];
$strmessage = $_POST['message'];

$sql = "INSERT into inquiry(email, inquirydate, message)
		VALUES ('$stremail', '$submitdate', '$strmessage')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>