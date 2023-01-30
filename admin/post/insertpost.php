<?php

require '../dbcon.php';

// define variables and set to empty values
$ptitle = "";
$pfile = "";
$pdesc = "";
$ptitle = $_POST['pn'];
$pfile = basename($_FILES["file"]["name"]);
$pdesc = $POST['pdesc'];

  $sql = "INSERT INTO post (ptitle, pimg, pcontent) VALUES ('$ptitle', '$pfile', '$pdesc')";
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: displayposts.php');
?>