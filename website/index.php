<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $device = $_POST['device'];
    $os = $_POST['os'];
    $issue = $_POST['issue'];

    // if (empty($fname) || empty($lname) || empty($device) || empty($os) || empty($issue)){
    //     echo "All fields are required.";
    //     die();
    // }
    // } else {
    // $host = "localhost";
    // $dbUser = "root";
    // $dbPass = "";
    // $dbName = "test";
    

    //connect to the db
    // $con = mysqli_connect($host, $dbUser, $dbPass, $dbName);

    $conn = new mysqli('localhost', 'root', '', 'TicketSystem');

    if ($conn->connect_error) {
        die('Connection failed : '.$conn->connect_error);
    } else {
        $insert = "INSERT INTO ticket (`LastName`, `FirstName`, `Device`, `OS`, `IssueDescription`) VALUES (?, ?, ?, ?, ?)";
        
        // Statement
        $stmt = $conn->prepare($insert);
        $stmt->bind_param("sssss",$lname, $fname, $device, $os, $issue);
        $stmt->execute();
        echo "Submitted!";
        $stmt->close();
        $conn->close();
        // mysqli_query($conn, $insert);
        // echo "Submitted";
        
    // } 

}

?>