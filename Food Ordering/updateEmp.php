<?php
include_once 'config.php';

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $emri= $_POST['emri'];
    $mbiemri= $_POST['mbiemri'];
    $adresa= $_POST['adresa'];
    $nrtel= $_POST['nrtel'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $paga= $_POST['paga'];


    $sql = "UPDATE employes SET emri=:emri, mbiemri=:mbiemri, adresa=:adresa, nrTel=:nrtel, email=:email, password=:password, paga=:paga WHERE id=:id ";

    $prep = $con->prepare($sql);

    $prep->bindParam(":id", $id);
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