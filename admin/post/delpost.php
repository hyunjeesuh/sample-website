<?php

require '../dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['poid'];
$sql = "DELETE FROM post WHERE pid=$id";

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: displayposts.php');

?>