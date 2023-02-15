<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/button.css">
    </head>
    <body>
        <?php include 'invalidlogin.php'?>

        <form action="index.html"method="post">
        <button class="btnn2" type="submit" name="create">Create a Ticket</button>
        </form>

        <br>

        <form action="viewtickets.php"method="post">
            <button class="btnn2" type="submit" name="view">View Tickets</button>
        </form>
    </body>
</html>



