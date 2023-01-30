<?php

require '../dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['cuid'];
$sql = "DELETE FROM inquiry WHERE inquiryid=$id";

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: displayinquiry.php');

?>