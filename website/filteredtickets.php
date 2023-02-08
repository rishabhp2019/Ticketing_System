<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
<?php
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $device = $_GET['device'];
    $os = $_GET['os'];
    $issue = $_GET['issue'];

    // command to filter out database results
    $conn2 = mysqli_connect('localhost', 'root', '', 'TicketSystem');
    
    $sql2 = "SELECT * FROM ticket WHERE FirstName REGEXP '$fname' OR
    LastName REGEXP '$lname' OR
    Device REGEXP '$device' OR 
    OS REGEXP '$os' OR
    IssueDescription REGEXP '$issue';";

    // $sql2 = "SELECT * FROM ticket WHERE FirstName LIKE '%$fname%' OR
    // LastName LIKE '%$lname%' OR
    // Device LIKE '%$device%' OR 
    // OS LIKE '%$os%' OR
    // IssueDescription LIKE '%$issue%';";

    $result2 = mysqli_query($conn2, $sql2);

    echo "<table>";
    echo"<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Device</th><th>OS</th><th>Issue Description</th><th>Solved</th></tr>";

    while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
        echo "<tr><td>";
        echo $row['TicketID'];
        echo "</td><td>";
        echo $row['LastName'];
        echo "</td><td>";
        echo $row['FirstName'];
        echo "</td><td>";
        echo $row['Device'];
        echo "</td><td>";
        echo $row['OS'];
        echo "</td><td>";
        echo $row['IssueDescription'];
        echo "</td><td>";
        echo $row['Solved'];
        echo "</td></tr>";
    }

    echo "</table>";
    ?>
    </body>
</html>