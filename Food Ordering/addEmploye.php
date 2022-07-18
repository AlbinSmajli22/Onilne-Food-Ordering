<?php
include_once 'config.php';


if (isset($_POST['submit'])) {
    
    $emri= $_POST['emri'];
    $mbiemri= $_POST['mbiemri'];
    $adresa= $_POST['adresa'];
    $nrtel= $_POST['nrtel'];
    $email= $_POST['email'];
    $paga= $_POST['paga'];
    $temPass = $_POST['password'];
    $password = password_hash($temPass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO employes (emri, mbiemri, adresa, nrTel, email, password, paga) VALUES (:emri, :mbiemri, :adresa, :nrtel, :email, :password, :paga)";

    $prep = $con->prepare($sql);

    $prep->bindParam(':emri', $emri);
    $prep->bindParam(':mbiemri', $mbiemri);
    $prep->bindParam(':adresa', $adresa);
    $prep->bindParam(':nrtel', $nrtel);
    $prep->bindParam(':email', $email);
    $prep->bindParam(':password', $password);
    $prep->bindParam(':paga', $paga);

    $prep->execute();

    header("Location: employes.php");
}
?>