<?php
	require_once('class/user.php');
	if (isset($_POST['btn'])) {
		$user = new User;
		$user->insert();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr>
	<a href="insert.php">Add User</a> ||
	<a href="view.php">View User</a>
	<hr>
	<form accept="" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="address" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn"></td>
			</tr>
		</table>
	</form>

</body>
</html>