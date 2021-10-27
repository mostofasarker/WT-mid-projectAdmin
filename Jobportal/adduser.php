<?php

session_start();
if (empty($_SESSION["loggeduser"])) {
	header("Location: login.php");
}
?>

<html>

<?php

include 'controllers/AdduserController.php';

?>

<head>
</head>

<!--sign up starts -->

<body>
	<div class="center-login">
		<h1 class="text text-center"> Add New User</h1>
		<br>
		<span style=" color : green;"><?php echo "<b>" . $successfulMessage  . "</b>"; ?></span>
		<span style=" color : green;"><?php echo "<b>" . $errorMessage  . "</b>"; ?></span>

		<form action="" method="post" name="adduserForm" onsubmit="return isvalid()">



			<div class="form-group">

				<h4 class="text">User Id</h4>
				<input type="number" name="id" id="id" value="<?php echo $id; ?>" class="form-control">
				<span id="idErr" style="color : red;"><?php echo $idErr; ?></span>

			</div>
			<div class="form-group">
				<h4 class="text">Username</h4>
				<input type="text" name="username" id="username" value="<?php echo $username; ?>" class="form-control">

				<span id="usernameErr" style="color : red;"><?php echo $usernameErr; ?></span>

			</div>

			<div class="form-group">
				<h4 class="text">Password</h4>
				<input type="password" name="password" id="password" value="<?php echo $password; ?>" class="form-control">

				<span id="passwordErr" style="color : red;"><?php echo $passwordErr; ?></span>
			</div>

			<div class="form-group">
				<h4 class="text">email</h4>
				<input type="text" name="email" id="email" value="<?php echo $email; ?>">

				<span id="emailErr" style="color : red;"><?php echo $emailErr; ?></span>
			</div>


			<div class="form-group">
				<h4 class="text">address</h4>
				<textarea name="address" id="address"><?php echo $address; ?></textarea>
				<span id="addressErr" style="color : red;"><?php echo $addressErr; ?></span>
			</div>


			<div class="form-group">
				<h4 class="text">gender</h4>
				<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
				<span id="genderErr" style="color : red;"><?php echo $genderErr; ?></span>
			</div>



			<div class="form-group">

				<h4 class="text">User Type:</h4>
				<select name="usertype" id="usertype">
					<option value="">Select</option>
					<option value="admin">Admin</option>
					<option value="jobprovider">Job-Provider</option>
					<option value="jobseeker">Job-Seeker</option>

				</select>
				<span id="usertypeErr" style="color : red;"><?php echo $usertypeErr; ?></span>
			</div>




			<div class="form-group text-center">

				<input type="submit" name="sign_up" class="btn btn-success" value="Sign Up" class="form-control">

			</div>

		</form>
	</div>

</body>

</html>