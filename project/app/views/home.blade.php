@extends('layout.main')

@section('content')
 <?php
//echo "Vancouver Clinic!";
//echo "<br>";

/*
//Create connection
$con=mysqli_connect("localhost","root","0123456","clinic");
//Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM patient");
while ($row = mysqli_fetch_array($result)) {
	echo $row['CareCard'];
//	echo "<br>";
}

//mysqli_close($con);
*/

?>

<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/patientbutton.css">
	
</head>
<body>
    <div class="container">
        <h1><a href="index.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Viewing As: <span class="caret"></span>
					</button>
					
				<ul class="dropdown-menu" style="right: 0; left: auto"; role="menu">
					<li><a href="Patient/login.php">Patient</a></li>
					<li class="divider"></li>
					<li><a href="Doctor/login.php">Doctor</a></li>
					<li><a href="Receptionist/login.php">Receptionist</a></li>
			  </ul>
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li><a href="#">View Appointments</a></li>
						<li><a href="#">Set Appointment</a></li>
                        <li><a href="#">Create New Patient</a></li>
                        <li><a href="#">Patient Search</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

<h1 align="center"> Welcome to our Clinic!</h1>
<p align="center"><img border="1" src="img/MainPic.jpg" alt="The Clinic" style="center" width="800" height="350"></p>


</body>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

</html>





@stop