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
	}
	
?>