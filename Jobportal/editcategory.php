<?php

session_start();
if (empty($_SESSION["loggeduser"])) {
	header("Location: login.php");
}

?>


<?php include 'admin_header.php';
include 'controllers/JobCategoryController.php';
$id = $_GET["id"]; //get hyperlink 
$c = getCategory($id);
?>
<!--edit category starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db; ?></h5>
	<form action="" method="post" name="addcategoryForm" onsubmit="return isvalid()">

		<h4 class="text">Name:</h4>
		<input type="hidden" name="id" value="<?php echo $c["id"]; ?>">
		<input type="text" name="name" value="<?php echo $c["name"]; ?>" class="form-control">
		<span id="catnameErr" style="color : red;"><?php echo $catnameErr; ?></span>
		<br>
		<br>
		<input type="submit" name="edit_category" class="btn btn-success" value="Edit Category" &tab;>

		<a href="allcategories.php"> Cancel</a>
	</form>
</div>