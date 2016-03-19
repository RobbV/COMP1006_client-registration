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
        <h1>Add Appointments!</h1>
        <h2> Fill out the fields below.</h2>
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
            <form method="get" action="main.php">
                <button class="btn btn-warning">Home</button>
            </form>
            <form method="get" action="my_appointments.php">
                <button class="btn btn-danger">My Appointments</button>
            </form>
        </div> <!-- close border div-->
    </div>
<form method="post" action="save_appointment.php" class="app">
    <fieldset class="drop">
    <label for="client"> Select a Client</label>
        <select name="client_name" id="client">
            <?php
            // connect
            $conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200326832','gc200326832','^jE8zPj3');				            // perpare query
            $sql = "SELECT client_name FROM clients";
            $cmd = $conn -> prepare($sql);
            $cmd -> execute();
            $clients = $cmd -> fetchAll();
            // loop through the results an add each beer to dropdown
            foreach ($clients as $client ) {
                echo '<option>' . $client['client_name'] . '</option>';
            }
            // disconnect
            $conn = null;
            ?>
        </select>
    </fieldset>
    <fieldset class="input">
            <label for="date">Enter date:</label>
            <input name="appointment_date" id="appointment_date" />
    </fieldset>
    <fieldset class="input">
            <label for="time">Enter time:</label>
            <input name="appointment_time" id="appointment_time" />
    </fieldset>
        <button id="app" class="btn btn-info">Save Appointment</button>

</form>
</main>
</body>
</html>
