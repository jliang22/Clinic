@extends('layout.main')

@section('content')
<?php
echo "Vancouver Clinic!";
echo "<br>";


//Create connection
$con=mysqli_connect("localhost","root","0123456","clinic");
//Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM patient");
while ($row = mysqli_fetch_array($result)) {
	echo $row['CareCard'];
	echo "<br>";
}

mysqli_close($con);
?>

<html>
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
CareCard: <input type="text" name="CareCard"><br>
<input type="submit">
</form>

</body>
</html>





@stop