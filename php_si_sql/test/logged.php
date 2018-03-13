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
	<style>
		.affix {
			top: 0;
			width: 100%;
			z-index: 9999 !important;
			<!-- "z-index" reprezinta axa z si afiseaza peste alta componenta -->
		}

		.affix + .container-fluid {
			padding-top: 70px;
		}
		
		.navbar{
			text-align: center;
		}
		
		@media (max-width: 768px) {
			.affix {
				position: static;
			}
		}		
		
		.border-between > [class*='col-']:before {
			background: #e3e3e3;
			bottom: 0;
			content: " ";
			left: 0;
			position: absolute;
			width: 5px;
			top: 0;
		}

		.border-between > [class*='col-']:first-child:before {
			display: none;
		}
		
		#section1 {padding-top:50px;}
		#section2 {padding-top:50px;}
		#section3 {padding-top:50px;}
		#section4 {padding-top:50px;}
		#section5 {padding-top:50px;}

	</style>
</head>

<body>

<?php		
	include "ms_connection.php";
?>
	

<div class="container-fluid" style="height:200px;">
  <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9"><img src="f1.jpeg" alt="Formula1_Image" style="height:200px;"><b style="font-size:200%;">Campionatul Mondial de Formula 1</b></div>
  </div>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
<!-- "navbar-inverse" este stilul(culoare negru si altele) barei de navigatie -->
<!-- "affix" face ca bara de navigatie sa se blocheze pe ecran -->
<!-- "data-offset-top" seteaza dupa cati pixeli sa se blocheze in top bara de navigatie -->
  <ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
  </ul>
</nav>

<div class="container-fluid">

<div class="row-fluid border-between"">
	<div class="col-md-3">
	<br>
	<br>
	<p id="demo">
	</p>
	<h1>Logare</h1>
	<form action="index.php" method="post">
		<div class="form-group">
			<label for="username">Nume de utilizator:</label>
			<input type="text" name="username" class="form-control" id="username">
		</div>
		<div class="form-group">
		<label for="password">Parola:</label>
		<input type="password" name="password" class="form-control" id="password">
		</div>
		<div class="checkbox">
		<label><input type="checkbox"> Retine</label>
		</div>
		<button type="submit" name="submit" class="btn btn-default">Iesi</button>
	</form> 
	</div>
	
	<div id="placePage" class="col-md-9" style="padding-left:3%;">
	
		<div style="font-size:130%;" id="section1">
		<?php
		session_start();
		$username = $_SESSION['name'];
		$tsq10 = "select s.Nume from Sponsori s inner join Logare l on s.SponsorID = l.SponsorID where l.Nume = '$username'";
		$getResults10 = $conn->prepare($tsq10);
		$getResults10->execute();
		$result10 = $getResults10->fetchAll(PDO::FETCH_ASSOC);
		echo '<b><h2>'."Bine ati venit, ";
		foreach($result10 as $x)
			foreach($x as $y){
				echo $y;
			}
		echo '</b></h2><br>';
		
		$tsq11 = "select e.NumeEchipa,es.SumaBani,es.An from Logare l inner join EchipeSponsori es on l.SponsorID = es.SponsorID inner join Echipe e on e.EchipaID = es.EchipaID where l.Nume = '$username';";
		$getResults11 = $conn->prepare($tsq11);
		$getResults11->execute();
		$result11 = $getResults11->fetchAll(PDO::FETCH_ASSOC);
		$aux = 0;
		foreach($result11 as $x){
			echo "Ati donat echipei ";
			foreach($x as $y){
				if ($aux == 1) echo " ";
				echo $y;
				if ($aux == 1) echo " euro, in anul ";
				if ($aux == 2) echo ".".'<br>';
				$aux = $aux + 1;
			}
			$aux = 0;
		}
		?>
		<br>
		<form action="sponsorizare.php" method="post">
			<div class="form-group">
				<label for="suma">Vreau sa donez suma (euro) de:</label><br>
				<input type="text" name="suma" class="col-sm-2" id="suma"><br>
			</div>
			
			<b>Echipei: </b><br><br>
			<select name="echipa">
			
			<?php
			$tsq12 = "select NumeEchipa from Echipe order by NumeEchipa";
			$getResults12 = $conn->prepare($tsq12);
			$getResults12->execute();
			$result12 = $getResults12->fetchAll(PDO::FETCH_ASSOC);
			foreach($result12 as $x){
				foreach($x as $y){
					echo '<option value="'.$y.'">'.$y.'</option>';
				}
			}
			?>
			
			</select>
			<br>
			<br>

			<button type="submit" name="submit" class="btn btn-default">Sponsorizeaza</button>
		</form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		
		
		
		
		</div>
		
		
		
	</div>
</div>

</div>

</body>
</html>
