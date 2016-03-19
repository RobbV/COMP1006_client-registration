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
        <h1>My Appointment</h1>
        <h2> See Appointments Below.</h2>
    </header>
    <!-- Global Nav -->
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
            <form method="get" action="main.php">
                <button class="btn btn-danger">Home</button>
            </form>
        </div> <!-- close border div-->
    </div>
    <?php
    // connect
    $conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200326832', 'gc200326832', '^jE8zPj3');
    //prepare the query
    $sql = "SELECT * FROM appointments ORDER BY appointment_date";
    $cmd = $conn -> prepare($sql);
    // run the query and store the results
    $cmd -> execute();
    $clients = $cmd -> fetchAll();
    //start the grid with html
    echo '<table class="table table-striped"><thead><th>Name</th><th>Date</th><th>Time</th></thead><tbody>';
    /* loop through the data, display each value in a new column and
    each beer in a new row */
    foreach ($clients as $client) {
        echo '<tr><td>' . $client['client_name'] . '</td>
	<td>' . $client['appointment_date'] . '</td>
	<td>' . $client['appointment_time'] . '</td></tr>';
    }
    // close the html grid
    echo '</tbody></table>';

    $conn = null;
    ?>
    <div id="email">
    <h4>Client Appointment reminder:</h4>
    <form method="post" action="email.php">
        <label for="client"> select email</label>
        <select name="email" id="email">
            <?php
            // connect
            $conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200326832','gc200326832','^jE8zPj3');				            // perpare query
            $sql = "SELECT email FROM clients";
            $cmd = $conn -> prepare($sql);
            $cmd -> execute();
            $clients = $cmd -> fetchAll();
            // loop through the results an add each beer to dropdown
            foreach ($clients as $client ) {
                echo '<option>' . $client['email'] . '</option>';
            }
            // disconnect
            $conn = null;
            ?>
        </select>
        <button class="btn btn-default">Send Reminder</button>

    </form>
    </div><!-- div email closing tag -->
</main>
</body>
</html>