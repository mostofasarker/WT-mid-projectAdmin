<?php

session_start();
if ($_SESSION["loggeduser"] == null) {
	header("Location: login.php");
}

?>

<?php include 'admin_header.php';
require_once 'controllers/UserController.php';
//$users = getalluser();
$users = getprofile($_SESSION["loggeduser"]);
//var_dump($users);
?>
<!--All Products starts -->


<div class="center">

	<div id="suggesstion"></div>
	<table border="1" style="border-collapse: collapse;">
		<thead>
			<th>Sl#</th>

			<th>User Name</th>

			<th>gender</th>
			<th> email</th>
			<th>address</th>
			<th>User Type</th>

		</thead>
		<tbody>
			<?php
			$i = 1;
			foreach ($users as $p) {
				$id = $p["id"];
				echo "<tr>";
				echo "<td>$id</td>";


				echo "<td>" . $p["username"] . "</td>";

				echo "<td>" . $p["gender"] . "</td>";
				echo "<td>" . $p["email"] . "</td>";
				echo "<td>" . $p["address"] . "</td>";
				echo "<td>" . $p["usertype"] . "</td>";

				echo "</tr>";
				$i++;
			}
			?>

		</tbody>
	</table>
</div>