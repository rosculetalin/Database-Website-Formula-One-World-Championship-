
<?php
	session_start();
	$suma = $_POST['suma'];
	$optiune = $_POST['echipa'];
	$username = $_SESSION['name'];
	include "ms_connection.php";
	
	//echo "username Sponsor: ".$username.'<br>';
	//echo "nume Echipa: ".$optiune.'<br>';
	
	
	
	$tsq14 = "select SponsorID from Logare where Nume = '$username'";
	$getResults14 = $conn->prepare($tsq14);
	$getResults14->execute();
	$result14 = $getResults14->fetchAll(PDO::FETCH_ASSOC);
	
	$idsponsor = 0;
	
	foreach($result14 as $x){
		foreach($x as $y){	
			$idsponsor = $y;
		}
	}
	//echo $idsponsor." ";
	
	
	
	$tsq15 = "select EchipaID from Echipe where NumeEchipa = '$optiune'";
	$getResults15 = $conn->prepare($tsq15);
	$getResults15->execute();
	$result15 = $getResults15->fetchAll(PDO::FETCH_ASSOC);
	
	$idechipa = 0;
	
	foreach($result15 as $x){
		foreach($x as $y){	
			$idechipa = $y;
		}
	}
	
	//echo $idechipa." ";
	
	$tsq13 = "select SumaBani from EchipeSponsori where EchipaID = $idechipa and SponsorID = $idsponsor";
	$getResults13 = $conn->prepare($tsq13);
	$getResults13->execute();
	$result13 = $getResults13->fetchAll(PDO::FETCH_ASSOC);
	$count13 = $getResults13->rowCount();
	
	if($count13 == 1){
	
	foreach($result13 as $x){
		foreach($x as $y){
			$suma = $suma + $y;
		}
	}
	
	$tsq16 = "update EchipeSponsori set SumaBani = $suma where EchipaID = $idechipa and SponsorID = $idsponsor";
	$getResults16 = $conn->prepare($tsq16);
	$getResults16->execute();
	
	}
	
	if($count13 == 0){
		$tsq17 = "insert into EchipeSponsori values($idechipa, $idsponsor, 2017, $suma);";
		$getResults17 = $conn->prepare($tsq17);
		$getResults17->execute();
	}
	
	header('Location: logged.php');
	
	
?>