<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            /* table,tr,th,td
            {
                border: 0.25px solid black;
            }
             */
             
        </style>
        <link rel="stylesheet" href="css/button.css">
        <link rel="stylesheet" href="css/table.css">

</head>
<body>
    <form action="" method="get">
        <input type="text" name="filter" placeholder="Filter">
        <button class="btnn">Search</button>
    </form>
    <table class="tablee">
        </table>
        
    <div id="myId">
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'TicketSystem');
    $sql = "SELECT * FROM ticket;";
    $result = mysqli_query($conn, $sql);



    // prints headings
    echo "<br>
          <br>";
    echo "<table class="tablee">";
    echo"<thread>"
    echo"<tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Device</th>
        <th>OS</th>
        <th>Issue Description</th>
        <th>Solved?</th>
        </tr></thread>";
    
    // prints each row/column
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
    </div>

    <?php

    if (isset($_GET['filter'])){

        echo '<script>
        const myDiv = document.getElementById("myId");
        const parent = myDiv.parentNode;
        parent.removeChild(myDiv);
        </script>';

        $filter = $_GET['filter'];
        // command to filter out database results
        $conn2 = mysqli_connect('localhost', 'root', '', 'TicketSystem');
        $sql2 = "SELECT * FROM ticket WHERE CONCAT(TicketID, LastName, FirstName, Device, OS, IssueDescription) LIKE '%$filter%';";
        $result2 = mysqli_query($conn2, $sql2);
    
        // prints headings
        echo "<br>
              <br>";
        echo "<table>";
        echo"<tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Device</th>
        <th>OS</th>
        <th>Issue Description</th>
        <th>Solved?</th>
        </tr>";
    
        // prints each row/column
        while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
            echo "<tr><td>";
            echo $row2['TicketID'];
            echo "</td><td>";
            echo $row2['LastName'];
            echo "</td><td>";
            echo $row2['FirstName'];
            echo "</td><td>";
            echo $row2['Device'];
            echo "</td><td>";
            echo $row2['OS'];
            echo "</td><td>";
            echo $row2['IssueDescription'];
            echo "</td><td>";
            echo $row2['Solved'];
            echo "</td></tr>";
        }
    }

    echo "</table><br><br><br>";
    echo 'Please enter the id corresponding to the ticket you have answered.<br><br>'

    ?>
    <form action="" method="get">
        <input type="text" name="finishedID" placeholder="ID">
        <button class="btnn">Submit</button>
    </form>

    <?php
    if (isset ($_GET['finishedID'])){

        $id = $_GET['finishedID'];

        $conn3 = mysqli_connect('localhost', 'root', '', 'TicketSystem');
        $sql3 = "DELETE FROM ticket WHERE TicketID='$id';";
        mysqli_query($conn3, $sql3);

        echo '<script>
        const myDiv = document.getElementById("myId");
        const parent = myDiv.parentNode;
        parent.removeChild(myDiv);
        </script>';

        $conn4 = mysqli_connect('localhost', 'root', '', 'TicketSystem');
        $sql4 = "SELECT * FROM ticket;";
        $result4 = mysqli_query($conn4, $sql4);



        // prints headings
        echo "<br>
              <br>";
        echo "<table>";
        echo"<tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Device</th>
        <th>OS</th>
        <th>Issue Description</th>
        <th>Solved?</th>
        </tr>";
    
        // prints each row/column
        while ($row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC)){
            echo "<tr><td>";
            echo $row4['TicketID'];
            echo "</td><td>";
            echo $row4['LastName'];
            echo "</td><td>";
            echo $row4['FirstName'];
            echo "</td><td>";
            echo $row4['Device'];
            echo "</td><td>";
            echo $row4['OS'];
            echo "</td><td>";
            echo $row4['IssueDescription'];
            echo "</td><td>";
            echo $row4['Solved'];
            echo "</td></tr>";
    }

            echo "</table>";
        }
    ?>
</body>
</html>