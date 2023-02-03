<?php

    //Retrives Login Information from Login Page
    if(isset($_POST['signin']))
    {
        $fname = $_POST['FirstName'];
        $lname = $_POST['LastName'];
        $device = $_POST['Device'];
        $OS = $_POST['OS'];
        $issue = $_POST['IssueDescription'];       
    }


    // Connects to database (login)
    $host = '172.25.174.37';
    $username = 'root';
    $password = "";
    $dbname = "TicketSystem.ticket";

    //Verifies the connection is made 
    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    //using sql to do a data entry
    $sql = "INSERT INTO `ticket` (`TicketID`, `LastName`, `FirstName`, `Device`, `OS`, `IssueDescription`, `Solved`) VALUES (NULL, '$lname','$fname','$device','$OS','$issue','N')";

    //send query to the database and confirm if successful

    $send = mysqli_query($con, $sql);
    if($send)
    {
        echo "Ticket Submitted!";
    }

    //close connection
    mysqli_close($con);


?>
