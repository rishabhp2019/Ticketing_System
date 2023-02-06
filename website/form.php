<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TicketSystem</title>
        <meta name="Ticketing System to automate the flow of recieving tickets." content="">

        <link rel="shortcut icon" href="LLLogo.png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

        <!-- 
        The links load the normalize CSS file and your own CSS file.
        -->
        <link rel="stylesheet" href="css/main.css">
    </head>

    <div class="box">   
        <body>
            <form action="index.php" method="post">
                  <h1>TicketSystem</h1>
              
                  <input type="FirstName" name="FirstName" value="FirstName" onFocus="field_focus(this, 'FirstName');" onblur="field_blur(this, 'FirstName');" class="FirstName" />
              
                  <input type="LastName" name="LastName" value="LastName" onFocus="field_focus(this, 'LastName');" onblur="field_blur(this, 'LastName');" class="LastName" />

                  <input type="Device" name="Device" value="Device" onFocus="field_focus(this, 'Device');" onblur="field_blur(this, 'Device');" class="Device" />

                  <input type="OS" name="OS" value="OS" onFocus="field_focus(this, 'OS');" onblur="field_blur(this, 'OS');" class="OS" />

                  <input type="IssueDescription" name="IssueDescription" value="IssueDescription" onFocus="field_focus(this, 'IssueDescription');" onblur="field_blur(this, 'IssueDescription');" class="IssueDescription" />

                  <input type="Submit">
              </form>
        </body>
    </div>    

        <!-- 
        This script tags load jQuery, any plugins you've downloaded, 
        and your main JavaScript file into your web page
        -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
