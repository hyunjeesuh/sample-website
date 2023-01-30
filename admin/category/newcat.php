<html>
	<head>
		<title> New Category </title>
		<link href="../adminstyle.css" rel="stylesheet">
	</head>

	<div class='container'>
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
		</nav>

		<main>
			<h1> New Category </h1>
			<form action=insertcat.php method=post>
			<h3> Name <input type=text name=cn> <br>
			<input type=submit value=submit>
			</form>
		</main>
</html>