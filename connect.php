<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','schools');

// get the post records
$id = $_POST['id'];

if(isset($_POST['save'])) {
$date = $_POST['date'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$sectorName= $_POST['sectorName'];
$schoolName = $_POST['schoolName'];
$functionName = $_POST['functionName'];

$sql = "INSERT INTO test (date, firstName, lastName, sectorName, schoolName, functionName) VALUES('$date', '$firstName', '$lastName', '$sectorName', '$schoolName', '$functionName')";
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records inserted successfully!!!";
}

}

?>