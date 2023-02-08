<?php
if (isset($_POST['login-submit'])){

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)){
        header("Location: ../login.html?error=emptyfields");
        exit();
    }

}
else{
    header("Location: ../login.html");
    exit(); 
}