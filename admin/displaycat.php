<html>
	<head>
		<title> Categories </title>
		<link href="adminstyle.css" rel="stylesheet">
	</head>
	
	<?php
		require 'dbcon.php';

		$sql = "SELECT catid, catname FROM  category";
		$result = $conn->query($sql);

		echo "<div class='container'>
			<div id='logo'>imsassybella</div>
			
			<nav>
				<div class='nav_links'>
					<ul>
						<li> <a href=adminhome.php> Home </a> </li>
						<li> <a href=displayposts.php> Posts </a> </li>
						<li id='active'> <a id='active' href=displaycat.php> Categories </a>
							<ul class='dropdown'>
								<li> <a href=newcat.php> New Category + </a> </li>
							</ul>
						</li>
						<li> <a href=displayinquiry.php> Inquiries </a> </li>
					</ul>
				</div>
			</nav>";
	
		echo "<main>
			<table class='container'>
			<tr bgcolor=#DE5D83>
				<td> Category ID </td>
				<td> Name </td>
				<td> </td>
				<td> Edit </td>
				<td> Delete </td>
			</tr>";

			
			
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr>
						<td>";
				echo $row["catid"];
				echo "</td> 
						<td>";
				echo $row["catname"];
				echo "</td>
					<td></td>
					<td> 
						<a href=updatecat.php?nid=$row[catid]> 
							<img src=icon/edit.gif width=25 height=25> 
						</a>
					</td>
					<td>
						<a href=delcat.php?nid=$row[catid]> 
							<img src=icon/delete.gif width=25 height=25  onclick='return confirm('are you sure you want to delete this item?');'> 
						</a>
					</td>
					</tr>";
			}
		} else {
		echo "0 results";
		}

		echo "</table></main>";
	
		echo "<footer>
				<a href=logout.php> Logout </a>
			</footer>
			</div>";
		
		$conn->close();
	?>
</html>
