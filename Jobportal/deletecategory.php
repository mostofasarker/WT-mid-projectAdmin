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
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 style="color: red;">Are you sure to Delete?</h4>
			<input type="hidden" name="id" value="<?php echo $c["id"]; ?>">
			<input type="text" name="name" value="<?php echo $c["name"]; ?>" class="form-control" disabled>
		</div>

		<div class="form-group text-center">

			<input type="submit" name="delete_category" class="btn btn-danger" value="Delete Category" &tab;>

			<a href="allcategories.php"> Cancel</a>
		</div>
	</form>
</div>