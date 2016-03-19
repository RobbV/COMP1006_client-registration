<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <meta content="text/html; charset=utf-8" http-equiv="content-type" />
<!-- link bootstrap and font awesome -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/main.css" />
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
<!-- main content -->
    <body>
        <main>
            <header>
                <h1>Add Clients</h1>
                <h2> Fill out the fields below.</h2>
            </header>
            <!-- Global NAV -->
           <div class="buttons2">
               <div id=border>
             <form method="get" action="main.php">
               <button class="btn btn-primary" type="submit">Home</button>
             </form>
             <form method="get" action="my_clients.php">
               <button class="btn btn-success">My Clients</button>
             </form>
             <form method="get" action="add_appointments.php">
               <button class="btn btn-warning">Add Appointments</button>
             </form>
             <form method="get" action="my_appointments.php">
               <button class="btn btn-danger">My Appointments</button>
             </form>
               </div> <!-- close border div-->
           </div> <!-- close buttons div -->
             <!--Add clients form-->
             <form method="post" action="save_client.php">
                 <fieldset>
                     <legend>Client Information</legend>
                    <!--Client Number-->
                     <label for="client_number">Enter a Client Number:</label>
                     <input name="client_number" id="client_number" />
                    <!--Name-->
                     <label for="client_name">Client Name:</label>
                     <input name="client_name" id="client_name" />
                    <!--Address-->
                     <label for="address">Client Address:</label>
                     <input name="address" id="address" />
                    <!--phone#-->
                     <label for="phone">Client Phone Number:</label>
                     <input name="phone" id="phone" />
                    <!--birthday-->
                     <label for="birthday">Client Date of Birth:</label>
                     <input name="birthday" id="birthday" />
                    <!--Email-->
                     <label for="email">Enter Clients Email Address</label>
                     <input name="email" id="email" />
                 </fieldset>
                 <button id="save" class="btn btn-info">Save Client</button>
             </form>
        </main>
    </body>
</html>