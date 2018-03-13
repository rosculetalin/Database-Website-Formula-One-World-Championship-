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
		
			<h2>Bine ati venit, Dnu Administrator</h2>
			<br>
		
			<form action="administrare.php" method="post">
				<div class="form-group">
					<label for="interogare">Introdu aici interogarea dorita:</label>
					<input type="text" class="form-control" name="interogare" id="interogare">
				</div>
				<select name="tipul">
					<option value="Select">Select</option>
					<option value="Insert">Insert/Update/Delete</option>
				</select>
				<button type="submit" name="submit" class="btn btn-default">Executa</button>
			</form>
			
			<p>
			<br>
			Tabelele cu coloanele sale sunt urmatoarele:
			<br>
			<br>
			<u>Echipe</u>
			<br>
			EchipaID              int
			<br>
			MasinaID              int
			<br>
			NumeEchipa            nvarchar(50)
			<br>
			TaraEchipei           nvarchar(15)
			<br> 
			<br>
			
			<u>EchipeSponsori</u>
			<br>
			EchipaID              int
			<br>
			SponsorID             int
			<br>
			An                    numeric(18,0)
			<br>
			SumaBani              numeric(18,0)
			<br>
			<br>
			
			<u>Logare</u>
			<br>
			LogareID              int
			<br>
			SponsorID             int
			<br>
			Nume                  nvarchar(15)
			<br>
			Parola				  nvarchar(15)
			<br>
			<br>
			
			<u>Masini</u>
			<br>
			MasinaID              int
			<br>
			An                    numeric(18,0)
			<br>
			Producator            nvarchar(15)
			<br>
			Model                 nvarchar(15)
			<br>
			<br>
			
			<u>Membri</u>
			<br>
			MembruID              int
			<br>
			EchipaID              int
			<br>
			Rol                   nvarchar(15)
			<br>
			DataAngajarii         date
			<br>
			DataPlecarii          date
			<br>
			Nume                  varchar(15)
			<br>
			Prenume               nvarchar(15)
			<br>
			TaraNatala            nvarchar(15)
			<br>
			<br>
			
			<u>Mondiale</u>
			<br>
			MondialaID			  int
			<br>
			EchipaID              int
			<br>
			MembruID              int
			<br>
			AnMondiala            numeric(18,0)
			<br>
			Circuit               varchar(30)
			<br>
			<br>
			
			<u>Sponsori</u>
			<br>
			SponsorID             int
			<br>
			Nume                  nvarchar(30)
			<br>
			An                    numeric(18,0)
			<br>
			<br>
			</p>
		</div>
		
		
		
	</div>
</div>

</div>

</body>
</html>
