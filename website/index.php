<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$device = $_POST['device'];
$os = $_POST['os'];
$issue = $_POST['issue'];

if (empty($fname) || ($lname) || ($device) || ($os) || ($issue)){
    echo "All fields are required.";
    die();
} else {
    $host = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "test";

    //connect to the db
    $con = new mysqli($host, $dbUser, $dbPass, $dbName);

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $INSERT = "INSERT INTO `test` (`fname`, `lname`, `device`, `os`, `issue`) VALUES (?, ?, ?, ?, ?)";
        
        //Statement
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param($fname, $lname, $device, $os, $issue);
        $stmt->execute();
        echo "Submitted";
        $stmt->close();
        $con->close();
    } 

}

?>
 

