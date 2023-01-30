<?php

require '../dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['nid'];
$sql = "DELETE FROM category WHERE catid=$id";

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: displaycat.php');

?>