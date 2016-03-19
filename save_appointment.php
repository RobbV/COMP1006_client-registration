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
        <h2> Please choose an option below.</h2>
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
            <form method="get" action="my_appointments.php">
                <button class="btn btn-danger">My Appointments</button>
            </form>
        </div> <!-- close border div-->
    </div>
    <?php
    // store the from inputs in variable
    $client_name = $_POST['client_name'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    // Vailidate our inputs
    $ok = true;
    if (empty($client_name)) {
        echo 'client name is required <br />';
        $ok = false;
    }
    if (empty($appointment_date)) {
        echo 'date is required <br />';
        $ok = false;
    }
    if (empty($appointment_time)) {
        echo 'time is required<br />';
        $ok = false;
    }
    // check of the form is ok to save

    if ($ok == true) {


        // connect to the DB
        $conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200326832', 'gc200326832', '^jE8zPj3');
        // setup the SQL command to save the data
        $sql = "INSERT INTO appointments (client_name, appointment_date, appointment_time) VALUES(:client_name,:appointment_date, :appointment_time)";
        // create a command object
        $cmd = $conn->prepare($sql);
        // put each input value into the proper field
        $cmd->bindParam(':client_name', $client_name, PDO::PARAM_STR);
        $cmd->bindParam(':appointment_date', $appointment_date, PDO::PARAM_INT);
        $cmd->bindParam(':appointment_time', $appointment_time, PDO::PARAM_BOOL);
        // execute the save
        $cmd->execute();
        // disconnect
        $conn = null;
        echo '<h3> Appointment saved! </h3> <br />' ;
    }
    if ($ok == false) {
        echo '<h3> Fields missing! </h3> <br />' ;
    }
    ;// <--- check for closing tag

    ?>
</main>
</body>
</html>