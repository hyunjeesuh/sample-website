<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container2">
	<div id="logo">imsassybella</div>
	
	<nav>
			<ul>
				<li> <a href=index.php> Home </a> </li>
				<li> <a href=#> About </a> </li>
				<li> <a href=#> Contact </a> </li>
			</ul>
	</nav>
	
	<main>	
			<section>	
				<article>
				<div class="main">
					<h2>Contact Form</h2>
					<br>
				</div>
				</article>
			<article>


				<script type="text/javascript" src="admin/javascript.js"></script>
				
				<div class="main">
					<form name=contactForm action=admin/inquiry/sendcontact.php
					onsubmit="return validateForm()" method=POST>
					
					<label for="email">Email Address</label>
					<input type=text id=email name=email placeholder="Your email address.."><br>
					
					<label for="submitdate">Today's Date</label>
					<input type=date id=submitdate name=submitdate><br><br>
					
					<label for="message">Message</label>
					<textarea id=message name=message placeholder="Write your message.." style="height:200px"></textarea><br>

					<input type=submit value=Submit>
				  </form>
				</div>
			</article>
			</section>
	</main>
	
	<footer>
		<a href=admin/login.php> Admin </a>
	</footer>
</div>
</html>