<?php

include_once 'config.php';
include_once 'head.php';
?>

<form action="AddAdmin.php" method="POST">

    <input type="text" name="fullname" id="fullname">
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <button type="submit" name="submit">submit</button>
</form>

<?php include_once 'footer.php'; ?>