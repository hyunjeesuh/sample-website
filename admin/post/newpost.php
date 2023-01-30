<html>
	<head>
		<title> New Post </title>
		<link href="../adminstyle.css" rel="stylesheet">
	</head>

	<div class='container'>
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
		</nav>
		
		<main>
			<div class='npost'>
			<h1> New Post </h1>
			<form action=insertpost.php method=post enctype="multipart/form-data">
			<h3> Title: <input type=text name=pn style="width:97%;"> <br><br>
			<h3> Media File: <input type=file name=mf> <br><br>
			<h3> Description: <br>
			<textarea id=message name=pdesc style="height:300px; width:1000px"></textarea> <br> </h3>
			<input type=submit value=submit>
			</form>
			</div>
		</main>
</html>