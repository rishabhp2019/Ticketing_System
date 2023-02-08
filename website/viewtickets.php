<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'TicketSystem');
    $sql = "SELECT * FROM ticket;";
    $result = mysqli_query($conn, $sql);

    echo "<table>";
    echo"<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Device</th><th>OS</th><th>Issue Description</th><th>Solved</th></tr>";

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
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
     <form action="filteredtickets.php" method="get">
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="lname" placeholder="Last Name">
        <input type="text" name="device" placeholder="Device">
        <input type="text" name="os" placeholder="OS">
        <input type="text" name="issue" placeholder="Issue Description">
    <button type="submit" name="filter-submit">Filter Tickets</button>
    </form>

    
</body>
</html>


