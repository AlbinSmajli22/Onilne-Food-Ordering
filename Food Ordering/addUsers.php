<?php
include_once 'config.php';



if(isset($_POST['submit'])){


    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $temPass = $_POST['password'];
    $password = password_hash($temPass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (emri, mbiemri, email, password) VALUES (:emri, :mbiemri, :email, :password)";

    $prep= $con->prepare($sql);

    $prep->bindParam(':emri', $emri);
    $prep->bindParam(':mbiemri', $mbiemri);
    $prep->bindParam(':email', $email);
    $prep->bindParam(':password', $password);

    $prep->execute();

    header("Location:index.php");

}
?>