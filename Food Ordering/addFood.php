
<?php
include_once 'config.php';


if (isset($_POST['submit'])) {
    
    $emriUshqimit= $_POST['emriUshqimit'];
    $permbajtja= $_POST['permbajtja'];
    $cmimi = $_POST['cmimi'];
    

    $sql = "INSERT INTO albanianf (emriUshqimit, permbajtja, cmimi) VALUES (:emriUshqimit, :permbajtja, :cmimi)";

    $prep = $con->prepare($sql);

    $prep->bindParam(':emriUshqimit', $emriUshqimit);
    $prep->bindParam(':permbajtja', $permbajtja);
    $prep->bindParam(':cmimi', $cmimi);

    $prep->execute();

    header('Location: AlbanianFood.php');

}