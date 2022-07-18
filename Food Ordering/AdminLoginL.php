<?php
include_once 'config.php';


if(isset($_POST['submit'])){
    
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE fullname=:fullname";


		$prep = $con->prepare($sql);

		$prep->bindParam(':fullname', $fullname);
		$prep->execute();
		$data = $prep->fetch();

		//var_dump($data);die;

		if($data == false){
			
			echo "this admin does not exist.";
		}
		elseif (password_verify($password, $data['password'])) {
			$_SESSION['fullname'] = $data['fullname'];
			$_SESSION['email'] = $data['email'];
			

			header("Location: index1.php");
		}
		else{
			echo "<script>alert('Woops! fullname or Password is Wrong.')</script>";
		
		}
	}

?>