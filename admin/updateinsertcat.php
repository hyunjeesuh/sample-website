<?php

require 'dbcon.php';

// define variables and set to empty values
$catname = "";
$id = "";
$id = $_POST['nid'];
$catname = $_POST['cn'];
echo $id;
echo "<BR>";
echo $catname;

$sql = "update category set catname='$catname' Where catid=$id";
$conn->query($sql);

$conn->close();


header('Location: displaycat.php');

?>