<?php
include_once 'config.php';


if(isset($_POST['submit'])){
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
		$password = $_POST['password'];

		$sql = "SELECT emri, mbiemri, adresa, nrTel ,email, password, paga FROM employes WHERE emri=:emri and mbiemri=:mbiemri";


		$prep = $con->prepare($sql);

		$prep->bindParam(':emri', $emri);
        $prep->bindParam(':mbiemri', $mbiemri);
		$prep->execute();
		$data = $prep->fetch();

		//var_dump($data);die;

		if($data == false){
			echo "User with this email is not registered.";
		}
		elseif (password_verify($password, $data['password'])) {
			$_SESSION['emri'] = $data['emri'];
			$_SESSION['mbiemri'] = $data['mbiemri'];

			header("Location: index2.php");
		}
		else{
			echo "password incorrect";
		}
	}

?>