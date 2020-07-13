<?php
	class User
	{
		
		function insert(){
			$link = mysqli_connect('localhost','root','','zamanwebdev');
			// echo "<pre>";
			// print_r($link);
			// $sql = "INSERT INTO user_info(name,email,phone,address) VALUES('name','email','phone','address')";
			$sql = "INSERT INTO user_info(name,email,phone,address) VALUES('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[address]')";
			if (mysqli_query($link,$sql)) {
				echo "Success";
			}else{
				die(mysqli_error($link));
			}	
		
			
		}
		function selectUsers(){
            $link = mysqli_connect('localhost','root','','zamanwebdev');
            $sql = "SELECT * FROM user_info";
            if ($result = mysqli_query($link,$sql)){
//                echo "<pre>";
//                print_r($result);
                return $result;

            }else{
                die(mysqli_error($link));
            }

        }
        function editUser($id){
//		    echo $id;
            $link = mysqli_connect('localhost','root','','zamanwebdev');
            $sql = "SELECT * FROM user_info WHERE id= '$id'";
            if ($result = mysqli_query($link,$sql)){
//                echo "<pre>";
//                print_r($result);
                return $result;

            }else{
                die(mysqli_error($link));
            }
        }
        function updaeUser($id){
        	$link = mysqli_connect('localhost','root','','zamanwebdev');
        	$sql = "UPDATE user_info SET name = '$_POST[name]', email = '$_POST[email]', phone = '$_POST[phone]', address = '$_POST[address]' WHERE id = '$id'";
        	if (mysqli_query($link,$sql)) {
        		header('location: view.php');
        	}else{
        		die(mysqli_error($link));
        	}	
        }
        function deleteUser($id){
	       	$link = mysqli_connect('localhost','root','','zamanwebdev');
	       	$sql = "DELETE FROM user_info WHERE id = '$id'";
	       	if (mysqli_query($link,$sql)) {
        		header('location: view.php');
        	}else{
        		die(mysqli_error($link));
        	}	

        }

        
	}
	
?>