<?php
    require_once('class/user.php');
    $user = new User;
    $result = $user->selectUsers();
    if (isset($_GET['delete'])) {
    	$user->deleteUser($_GET['id']);
    }

//    echo "<pre>";
//    print_r($info);
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
	<table border="1">
		<tr>
			<td>Sl.</td>
			<td>Name</td>
			<td>Email</td>
			<td>Phone</td>
			<td>Address</td>
			<td>Action</td>
		</tr>
        <?php
        $i = 1;
        while ($info = mysqli_fetch_assoc($result)){

         ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $info['name']; ?></td>
			<td><?php echo $info['email']; ?></td>
			<td><?php echo $info['phone']; ?></td>
			<td><?php echo $info['address']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $info['id'];?>">Edit</a> ||
                <a href="?delete&id=<?php echo $info['id'];?>" onclick="return confirm('Are you sure to delete?')" >Delete</a>
            </td>
		</tr>
        <?php }?>
	</table>

</body>
</html>