<?php


 $dbuser = "root";
 $dbpass = "";
 $db = "TicketSystem";


 $conn = new mysqli('localhost', $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

echo "Connected :)";