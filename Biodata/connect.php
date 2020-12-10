

<?php

$Name = filter_input(INPUT_POST, 'Name');
$PA = filter_input(INPUT_POST, 'PA');
$PA2 = filter_input(INPUT_POST, 'PA2');

$DB = filter_input(INPUT_POST, 'DB');
$Religon = filter_input(INPUT_POST, 'Religon');
$CS = filter_input(INPUT_POST, 'CS');
$Age = filter_input(INPUT_POST, 'Age');
$Citizenship = filter_input(INPUT_POST, 'Citizenship');
$Weigth = filter_input(INPUT_POST, 'Weigth');
$PB = filter_input(INPUT_POST, 'PB');
$Height = filter_input(INPUT_POST, 'Height');

$FName= filter_input(INPUT_POST, 'FName');
$MName = filter_input(INPUT_POST, 'MName');
$Address = filter_input(INPUT_POST, 'Address');
$LDS = filter_input(INPUT_POST, 'LDS');
$PE = filter_input(INPUT_POST, 'PE');

$Elementary = filter_input(INPUT_POST, 'Elementary');
$YG1 = filter_input(INPUT_POST, 'YG1');
$HighSchool = filter_input(INPUT_POST, 'HighSchool');
$YG2 = filter_input(INPUT_POST, 'YG2');
$College = filter_input(INPUT_POST, 'College');
$YG3 = filter_input(INPUT_POST, 'YG3');
$Course = filter_input(INPUT_POST, 'Course');
$SS = filter_input(INPUT_POST, 'SS');

if (!empty($Name)) {
if (!empty($PA)) {

if (!empty($PA2)) {
if (!empty($DB)) {
if (!empty($Religon)) {
if (!empty($CS)) {
if (!empty($Age)) {
if (!empty($Citizenship)) {
if (!empty($Weigth)) {
if (!empty($PB)) {
if (!empty($Height)) {

if (!empty($FName)) {
if (!empty($MName)) {
if (!empty($Address)) {
if (!empty($LDS)) {
if (!empty($PE)) {

if (!empty($Elementary)) {
if (!empty($YG1)) {
if (!empty($HighSchool)) {
if (!empty($YG2)) {
if (!empty($College)) {
if (!empty($YG3)) {
if (!empty($Course)) {
if (!empty($SS)) {


		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "biodata";

		// create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()) {
			die('Connect Error ('.
				mysqli_connect_errno().')'.
				mysqli_connect_error());
		}
		else{
			$sql = "INSERT INTO  biodata (Name,PA,PA2,DB,Religon,CS,Age,Citizenship,Weigth,PB,Height,FName,MName,Address,LDS,PE,Elementary,YG1,HighSchool,YG2,
			College,YG3,Course,SS) values ('$Name','$PA','$PA2','$DB','$Religon','  $CS', '$Age','$Citizenship','$Weigth','$PB',
			'$Height', '$FName','$MName','$Address','$LDS',
			'$PE','$Elementary','$YG1','$HighSchool','$YG2',
			'$College','$YG3','$Course','$SS')";

			if ($conn -> query($sql)) {
				echo "New Record is Applied Succes!";


			}
			else{
				echo "Error:". $sqli . "<br>" . $conn->error;
			}
			$conn->close();

	  }

	}
	else{
		echo "Fields should not Be  empty";
		die();

	}


}
	else{
		echo "Please Complete All Fields!";
		die();

	}




?>