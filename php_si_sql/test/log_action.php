<?php
	session_start();
	include "ms_connection.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$tsq2 = "SELECT * FROM Logare WHERE Nume = '$username' AND Parola = '$password' AND SponsorID is not null";
	$getResults2 = $conn->prepare($tsq2);
	$getResults2->execute();
	$results2 = $getResults2->fetchAll(PDO::FETCH_BOTH);
	$count = $getResults2->rowCount();
	
	$tsq220 = "SELECT * FROM Logare WHERE Nume = '$username' AND Parola = '$password' AND SponsorID is null";
	$getResults220 = $conn->prepare($tsq220);
	$getResults220->execute();
	$results220 = $getResults220->fetchAll(PDO::FETCH_BOTH);
	$count220 = $getResults220->rowCount();
	
	
	if($count == 1): // 1 cu 0;
		$_SESSION['name'] = $username;
		header('Location: logged.php');
	endif;
	
	if($count220 == 1):  // 0 cu 1;
		$_SESSION['name'] = $username;
		header('Location: admin.php');
	endif;
	
	if($count == 0 and $count220 == 0):
		header('Location: index.php');
	endif;	
	
?>