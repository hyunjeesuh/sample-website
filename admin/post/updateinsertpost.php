<?php

require '../dbcon.php';

// define variables and set to empty values
$ptitle = "";
$id = "";
$pfile = "";
$pdesc = "";
$id = $_POST['pid'];
$ptitle = $_POST['pn'];
$pfile = $_POST['mf'];
$pdesc = $_POST['pdesc'];
echo $id;
echo "<br>";
echo $ptitle;
echo "<br>";
echo $pfile;
echo "<br>";
echo $pdesc;

$sql = "UPDATE post SET ptitle='$ptitle', 
						pimg='$pfile',
						pcontent='$pdesc' WHERE pid=$id";
$conn->query($sql);

$conn->close();


header('Location: displayposts.php');

?>