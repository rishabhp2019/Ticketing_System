<?php
    //Retrives Login Information from Login Page
    if(isset($_POST['Submit']))
    {
        // Connects to database (login)    
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'TicketSystem';

        //Verifies the connection is made 
        $con = mysqli_connect($host, $username, $password, $dbname);

        $fname = $mysqli->real_escape_string($_POST['FirstName']);
        $lname = $mysqli->real_escape_string($_POST['LastName']);
        $device = $mysqli->real_escape_string($_POST['Device']);
        $OS = $mysqli->real_escape_string($_POST['OS']);
        $issue = $mysqli->real_escape_string($_POST['IssueDescription']);
                
        //using sql to do a data entry
        $sql = "INSERT INTO `ticket` (`TicketID`, `LastName`, `FirstName`, `Device`, `OS`, `IssueDescription`, `Solved`) VALUES (NULL, '$fname', '$lname', '$device', '$OS', '$issue', 'N')";

        $rs = mysqli_query($con, $sql);

        if ($rs){
            echo "Forum Submitted.";
        }
        else if {!$rs}{
            echo "Could not Submit";
        }

        exit;
    }
?>