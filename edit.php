<?php
    require_once "class/user.php";
    $user = new User;
    $result = $user->editUser($_GET['id']);
    $info = mysqli_fetch_assoc($result);
    if (isset($_POST['btn'])) {
        $user->updaeUser($_GET['id']);
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
                    <td><input type="text" name="name" value="<?php echo $info['name'];?>" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?php echo $info['email'];?>" required></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" value="<?php echo $info['phone'];?>" required></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="address" cols="30" rows="10">
                            <?php echo $info['address'];?>
                        </textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn" value="Update"></td>
                </tr>
            </table>
        </form>

    </body>
</html>
