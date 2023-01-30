<html>
	<head>
		<title> Posts </title>
		<link href="../adminstyle.css" rel="stylesheet">
	</head>
	
	<?php
		require '../dbcon.php';

		$sql = "SELECT * FROM post";
		$result = $conn->query($sql);

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
			<center>
			<table>
			<tr bgcolor=#DE5D83>
				<td> Post ID </td>
				<td> Title </td>
				<td> Media </td>
				<td> Content </td>
				<td> </td>
				<td> Edit </td>
				<td> Delete </td>
			</tr>";

			
			
		if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>";
					echo $row["pid"];
					echo "</td>";
					echo "<td>";
					echo $row["ptitle"];
					echo "</td>";
					echo "<td>";
					?>
					<img style="width:250; height:500;" src="./media/
					<?php echo $row['pimg']; ?>">
					<?php
					echo "</td>";
					echo "<td>";
					echo $row["pcontent"];
					echo "</td>";
					echo "<td>";
					echo "";
					echo "</td>";
					echo "<td>";
					echo "<a href=updatepost.php?poid=$row[pid]> 
					<img src=../icon/edit.gif width=25 height=25> </a>";
					echo "</td>";
					echo "<td>";
					echo "<a href=delpost.php?poid=$row[pid]> 
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
