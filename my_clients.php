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
        <h1>MY Clients</h1>
        <h2> All Clients Displayed below.</h2>
    </header>
    <!-- Global NAV -->
    <div class="buttons2">
        <div id=border>
            <form method="get" action="add_clients.php">
                <button class="btn btn-primary" type="submit">Add Client</button>
            </form>
            <form method="get" action="main.php">
                <button class="btn btn-success">Home</button>
            </form>
            <form method="get" action="add_appointments.php">
                <button class="btn btn-warning">Add Appointments</button>
            </form>
            <form method="get" action="my_appointments.php">
                <button class="btn btn-danger">My Appointments</button>
            </form>
        </div> <!-- close border div-->
    </div> <!-- close buttons div -->
<?php
// connect
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200326832', 'gc200326832', '^jE8zPj3');
//prepare the query
$sql = "SELECT * FROM clients";
$cmd = $conn -> prepare($sql);
// run the query and store the results
$cmd -> execute();
$clients = $cmd -> fetchAll();
//start the grid with html
echo '<table class="table table-striped"><thead><th>Client #</th><th>Client Name</th><th>Address</th><th>Phone #</th><th>Date of birth</th><th>Email</th></thead><tbody>';
/* loop through the data, display each value in a new column and
each beer in a new row */
foreach ($clients as $client) {
    echo '<tr><td>' . $client['client_number'] . '</td>
	<td>' . $client['client_name'] . '</td>
	<td>' . $client['address'] . '</td>
	<td>' . $client['phone'] . '</td>
	<td>' . $client['birthday'] . '</td>
	<td>' . $client['email'] . '</td></tr>';
}
// close the html grid
echo '</tbody></table>';

$conn = null;
?>

</main>
</body>
</html>
