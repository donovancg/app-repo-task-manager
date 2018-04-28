<?php include "db.php"; ?>
<?php

if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $hashFormat = "$2y$10$";
    $salt = "anthropologicalanomaly18";
    $hashSalt = '$2y$10$anthropologicalanomaly18';
    $password = crypt($password, $hashSalt);
    echo "Username: $username. Password: $password";
}

?>