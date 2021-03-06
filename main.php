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
                <h1>Welcome!</h1>
                <h2> Please choose an option.</h2>
            </header>
            <!-- global NAV-->
           <div class="buttons">
               <div id=border>
             <form method="get" action="add_clients.php">
               <button class="btn btn-primary" type="submit">Add Clients</button>
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
           </div>
        </main>
    </body>
</html>