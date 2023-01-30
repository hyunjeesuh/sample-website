<html>
	<head>
		<title> Update Post </title>
		<link href="../adminstyle.css" rel="stylesheet">
	</head>

	<?php

		require '../dbcon.php';

		// define variables and set to empty values
		$id = "";
		$id = $_GET['poid'];
		$sql = "SELECT * FROM post WHERE pid=$id";
		$result = $conn->query($sql);
		$conn->query($sql);
		$row = $result->fetch_assoc();

		echo "<div class='container'>
			<div id='logo'>imsassybella</div>
			
			<nav>
				<div class='nav_links'>
					<ul>
						<li> <a href=../adminhome.php> Home </a> </li>
						<li id='active'> <a id='active' href=displayposts.php> Posts </a> 
							<ul class='dropdown'>
								<li> <a href=newpost.php> New Post + </a> </li>
							</ul>
						</li>
						<li> <a href=../category/displaycat.php> Categories </a>
						</li>
						<li> <a href=../inquiry/displayinquiry.php> Inquiries </a> </li>
					</ul>
				</div>
			</nav>";
		
		echo "<main>
			<div class='npost'>
			<h1> Update Post </h1>
			<form action=updateinsertpost.php method=post>
			<input type=hidden name=pid value=$id>
			<h3> Title: <input type=text name=pn value=". $row['ptitle'] ."> <br><br>
			<h3> Media File: <input type=file name=mf value=". $row['pimg'] ."> <br><br>
			<h3> Description: <br>
			<textarea id=message name=pdesc value=". $row['pcontent'] ."></textarea> <br> </h3>
			<input type=submit value=submit>
			</form>
			</div>
		</main>";
		
		$conn->close();
	?>
</html>