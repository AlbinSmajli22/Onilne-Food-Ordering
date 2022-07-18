<?php
include_once 'config.php';


if(isset($_POST['submit'])){
        $email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT emri,mbiemri,email,password FROM users WHERE email=:email";


		$prep = $con->prepare($sql);

		$prep->bindParam(':email', $email);
		$prep->execute();
		$data = $prep->fetch();

		//var_dump($data);die;

		if($data == false){
			echo "User with this email is not registered.";
		}
		elseif (password_verify($password, $data['password'])) {
			$_SESSION['emri'] = $data['emri'];
			$_SESSION['email'] = $data['email'];

			header("Location: index3.php");
		}
		else{
			echo "password incorrect";
		}
	}

?>