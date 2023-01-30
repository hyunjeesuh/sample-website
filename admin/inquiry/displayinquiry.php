<html>
	<head>
		<title> Inquiries </title>
		<link href="../adminstyle.css" rel="stylesheet">
	</head>
	
	<?php
		require '../dbcon.php';

		$sql = "SELECT * FROM  inquiry";
		$result = $conn->query($sql);

		echo "<div class='container'>
			<div id='logo'>imsassybella</div>
			
			<nav>
				<div class='nav_links'>
					<ul>
						<li> <a href=../adminhome.php> Home </a> </li>
						<li> <a href=../post/displayposts.php> Posts </a> </li>
						<li> <a href=../category/displaycat.php> Categories </a> </li>
						<li id='active'> <a id='active' href=displayinquiry.php> Inquiries </a> </li>
					</ul>
				</div>
			</nav>";
	
		echo "<main>
			<center>
			<table>
			<tr bgcolor=#DE5D83>
				<td> Inquiry ID </td>
				<td> Date </td>
				<td> Email </td>
				<td> Message </td>
				<td> </td>
				<td> Edit </td>
				<td> Delete </td>
			</tr>";

			
			
		if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>";
					echo $row["inquiryid"];
					echo "</td>";
					echo "<td>";
					echo $row["inquirydate"];
					echo "</td>";
					echo "<td>";
					echo $row["email"];
					echo "</td>";
					echo "<td>";
					echo $row["message"];
					echo "</td>";
					echo "<td>";
					echo "";
					echo "</td>";
					echo "<td>";
					echo "<td>";
					echo "<a href=delinquiry.php?cuid=$row[inquiryid]> 
					<img src=../icon/delete.gif width=25 height=25  
						onclick=\"return confirm('Are you sure you want to delete this item?');\"> 
					</a> ";
					echo "</td>";
					echo "</tr>";
				}
		} else {
			echo "0 results";
		}

		echo "</table></main>";
	
		echo "<footer>
				<a href=../logout.php> Logout </a>
			</footer>
			</div>";
		
		$conn->close();
	?>
</html>
