<html>
	<head>
		<title> Update Category </title>
		<link href="../adminstyle.css" rel="stylesheet">
	</head>
	
	<?php

		require '../dbcon.php';

		// define variables and set to empty values
		$id = "";

		$id = $_GET['nid'];
		$sql = "SELECT catname FROM category WHERE catid=$id";
		$result = $conn->query($sql);
		$conn->query($sql);
		$row = $result->fetch_assoc();

		echo "<div class='container'>
			<div id='logo'>imsassybella</div>
			
			<nav>
				<div class='nav_links'>
					<ul>
						<li> <a href=../adminhome.php> Home </a> </li>
						<li> <a href=../post/displayposts.php> Posts </a> </li>
						<li id='active'> <a id='active' href=displaycat.php> Categories </a>
							<ul class='dropdown'>
								<li> <a href=newcat.php> New Category + </a> </li>
							</ul>
						</li>
						<li> <a href=../inquiry/displayinquiry.php> Inquiries </a> </li>
					</ul>
				</div>
			</nav>";

		echo "<main>
			<h1> Update Category </h1>
			<form action=updateinsertcat.php method=post>
			<input type=hidden name=nid value=$id>
			<h3> Name <input type=text name=cn value=". $row['catname'] ."> <br>
			<input type=submit value=submit>
			</form>
			</main>";

		$conn->close();
	?>
</html>