<?php

session_start();
if (empty($_SESSION["loggeduser"])) {
	header("Location: login.php");
}

?>
<?php include 'admin_header.php';
include 'controllers/JobCategoryController.php';
?>
<!--addproduct starts -->

<div class="center">
	<h5 class="text-danger"><?php echo $err_db; ?></h5>
	<form action="" method="post" name="addcategoryForm" onsubmit="return isvalid()">

		<h4 class="text">Name:</h4>
		<input type="text" name="name">
		<span id="catnameErr" style="color : red;"><?php echo $catnameErr; ?></span>
		<br>
		<br>
		<input type="submit" name="add_category" class="btn btn-success" value="Add Category" class="form-control">

	</form>
</div>