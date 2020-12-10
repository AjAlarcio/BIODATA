<!DOCTYPE html>
<html>
<head>
<a href="postform.php"  style="margin-left: 10px"><input class="div" type="submit" value ="Back to Log in!"></a><br><br>	
</head>
<body>

</body>
</html>

<?php  

$Name    =  $_POST['Name'];  
$PA  =   $_POST['PA'];  
$PA2  =   $_POST['PA2'];  
$DB = $_POST['DB'];
$Religon = $_POST['Religon'];
$CS = $_POST['CS'];
$Age = $_POST['Age'];
$Citizenship = $_POST['Citizenship'];
$Weight = $_POST['Weight'];
$PB = $_POST['PB'];
$Height = $_POST['Height'];
$FName = $_POST['FName'];
$MName = $_POST['MName'];
$Address = $_POST['Address'];
$LDS = $_POST['LDS'];
$PE = $_POST['PE'] ;

$Elementary = $_POST['Elementary'];
$YG1 = $_POST['YG1'];
$HighSchool = $_POST['HighSchool'];
$YG2 = $_POST['YG2'];
$College = $_POST['College'];
$YG3 = $_POST['YG3'];
$Course = $_POST['Course'];
$SS = $_POST['SS'];



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
			$sql = "INSERT INTO  biodata (Name,PA,PA2,DB,Religon,CS,Age,Citizenship,Weight,PB,Height,FName,MName,Address,LDS,PE,Elementary,YG1,HighSchool,YG2,
			College,YG3,Course,SS) values ('$Name','$PA','$PA2','$DB','$Religon','  $CS', '$Age','$Citizenship','$Weight','$PB',
			'$Height', '$FName','$MName','$Address','$LDS',
			'$PE','$Elementary','$YG1','$HighSchool','$YG2',
			'$College','$YG3','$Course','$SS')";

				if ($conn -> query($sql)) {
				echo "New Record is Inserted Succes!";


			}
			else{
				echo "Error:". $sqli . "<br>" . $conn->error;
			}
			$conn->close();

	  }

		

?>  