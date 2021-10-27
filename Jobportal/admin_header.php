<?php
include 'controllers/UserController.php';

if (array_key_exists('logout', $_POST)) {
	logout();
}
?>
<html>

<head>
</head>

<body>
	<div class="text-center">
		<h1 class="header">Admin</h1>
	</div>
	<!--menu starts-->
	<div class="text-center">
		<a href="allcategories.php">All Categories</a>
		<a href="addcategory.php">Add Category</a>
		<a href="adminprofile.php">My Profile</a>
		<form method="post">
			<input type="submit" name="logout" class="button" value="Logout" />
		</form>
	</div>
	<!--menu ends-->