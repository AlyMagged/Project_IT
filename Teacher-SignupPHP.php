<?php
session_start() ; 
error_reporting(E_ALL ^ E_NOTICE)  ;
$teacherName = $_POST['Name'] ;
$teacherEmail = $_POST['Email'] ;
$teacherPassword = $_POST['Password'] ;
$teacherPassword2 = $_POST['ConfPassword'] ;


		$userName = "root" ; 
		$password = "" ;
		$dbName = "classroom" ;

		$connection = new mysqli("localhost" , $userName , $password , $dbName) ;
		if ($connection->connect_error)
		{
		    echo 'Connection Faild: '.$connection->connect_error;
		}

		if (TRUE)
		{
			$sql = "INSERT INTO teacher (TeacherName,Email,Password) VALUES ('$teacherName', '$teacherEmail' , '$teacherPassword');" ;
			if ($connection->query($sql) == TRUE)
			{
				echo "<h1>Thank you for rigistration in our web site 'Classroom'</h1>";
			}
			else 
			{
				echo("Error description: " . mysqli_error($connection));
			}
		}
		$connection->close() ;
		$_SESSION['teacherEmail'] = $teacherEmail ; 
		$_SESSION['teacherName'] = $teacherName ;

		echo '<meta http-equiv="refresh" content ="2; url=Teacher-Account.php"/>';
		
?>