<?php include "db.php" ?>

<?php

if(isset($_POST['submit'])) {
    $success = 0;
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $password_repeat = mysqli_real_escape_string($connect, $_POST['password_repeat']);

    if($password != $password_repeat) {
        header("Location: ../signup/?e=1");
    }

    $hashFormat = "$2y$10$";
    $salt = "anthropologicalanomaly18";
    $hashSalt = '$2y$10$anthropologicalanomaly18';
    $password = crypt($password, $hashSalt);

    $queryConfirm = "SELECT username FROM users WHERE username='$username'";
    $resultConfirm = mysqli_query($connect, $queryConfirm);
    $numConfirm = mysqli_num_rows($resultConfirm);
    // print_r($numConfirm);
    echo $numConfirm;

    

    if($numConfirm != 0) {
        header("Location: ../signup/?e=1&r=1");
        $success = -1;
    } else {
        $success = 1;
    }

    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

    if($success == 1) {
        $result = mysqli_query($connect, $query);
        mkdir("../users/$username", 0777);
        $file_to_create = "../users/$username/index.php";
        fopen($file_to_create, "w");
        fread("../txt/userphp.txt", filesize("../txt/userphp.txt"));
        fwrite($file_to_create, $content);
        fclose($file_to_create);
        echo "Your account has successfully been created.";
    }
}



?>