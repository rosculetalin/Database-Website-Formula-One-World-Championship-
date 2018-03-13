<!DOCTYPE html>
<html>
<head>
	<title>Campionatul International de Formula 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div style="padding-left:3%;">
<?php
	
	session_start();
	$interogare =  $_POST['interogare'];
	$tipul = $_POST['tipul'];
	include "ms_connection.php";
	echo '<br>';
	echo $interogare;
	echo '<br>';
	echo $tipul;
	echo '<br>';
	
	function table($getResult) {
		$result = $getResult->fetchAll(PDO::FETCH_ASSOC);
		echo '<table class="table table-striped">';
		tableHead( $result );
		tableBody( $result );
		echo '</table>';
					
	}
				
	function tableHead( $result ) {
		echo '<thead>';
		foreach ( $result as $x ) {
			echo '<tr>';
			foreach ( $x as $k => $y ) {
				echo '<th>' .fromCamelCase($k). '</th>';
			}
			echo '</tr>';
			break;
		}
		echo '</thead>';
	}

	function tableBody( $result ) {
		echo '<tbody>';
		foreach ( $result as $x ) {
			echo '<tr>';
			foreach ( $x as $y ) {
				echo '<td>' . $y . '</td>';
			}
			echo '</tr>';
		}
		echo '</tbody>';
	}
				
	function fromCamelCase($camelCaseString) {
		$re = '/(?<=[a-z])(?=[A-Z])/x';
		$a = preg_split($re, $camelCaseString);
		return join($a, " " );
	}
	
	$tsq18 = $interogare;
	$getResults18 = $conn->prepare($tsq18);
	$getResults18->execute();
	
	if ($tipul == 'Select'){
		table($getResults18);
	}
	
	if ($tipul == 'Insert'){
		header('Location: admin.php');
	}

?>
</div>
</body>
</html>