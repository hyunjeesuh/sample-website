<?php

require '../dbcon.php';

// define variables and set to empty values
$catname = "";
$id = "";
$id = $_POST['nid'];
$catname = $_POST['cn'];
echo $id;
echo "<br>";
echo $catname;

$sql = "UPDATE category SET catname='$catname' WHERE catid=$id";
$conn->query($sql);

$conn->close();


header('Location: displaycat.php');

?>