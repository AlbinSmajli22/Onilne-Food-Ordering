<?php
include_once 'config.php';


if (isset($_POST['submit'])) {
    
    $fullname= $_POST['fullname'];
    $email= $_POST['email'];
    $temPass = $_POST['password'];
    $password = password_hash($temPass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admin (fullname, email, password) VALUES (:fullname, :email, :password)";

    $prep = $con->prepare($sql);

    $prep->bindParam(':fullname', $fullname);
    $prep->bindParam(':email', $email);
    $prep->bindParam(':password', $password);

    $prep->execute();

}