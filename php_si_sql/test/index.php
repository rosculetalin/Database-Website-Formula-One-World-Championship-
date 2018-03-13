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
		#section6 {padding-top:50px;}

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
	<li><a href="#section1">Introducere</a></li>
    <li><a href="#section2">Campioni</a></li>
    <li><a href="#section3">Echipe</a></li>
    <li><a href="#section4">Piloti</a></li>
	<li><a href="#section5">Curiozitati</a></li>
	<li><a href="#section6">Imagini</a></li>
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
		<form action="log_action.php" method="post">
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
			<button type="submit" name="submit" class="btn btn-default">Intra</button>
		</form> 
	</div>
	
	<div id="placePage" class="col-md-9" style="padding-left:3%;">
	
		<div id="section1">
			<h2>Introducere</h2>
			<p style="font-size:120%;"><b>Formula 1</b>(abreviata <b>F1)</b> este o intrecere de automobilism care se organizează anual sub forma a două campionate mondiale, care au loc în paralel, ambele fiind patronate de Federația Internațională a Automobilului (FIA). Drepturile comerciale în Formula 1 sunt deținute de compania Alpha Prema.
			</p>
			<p style="font-size:120%;">Numele de <b>Formula</b> provine de la faptul că toate echipele înscrise în campionat trebuie să își construiască mașinile (cunoscute și sub numele de monoposturi) după un anumit regulament, o formulă pe care o decide FIA. Cifra <b>1</b> provine de la faptul ca întrecerea este catalogată drept cea mai prestigioasă formulă organizată de FIA.
			</p>
			<p style="font-size:120%;">Cele două campionate sunt Campionatul Mondial al Piloților (engl: World Drivers' Championship) și Campionatul Mondial al Constructorilor (engl. World Constructors' Championship). În actuala ediție a campionatului participă 10 echipe și 20 piloți.
			</p>
			<p style="font-size:120%;">Formula 1 este un sport cu mare trecere la public. Toate etapele campionatului sunt televizate în mai mult de 200 de țări, numărul celor care privesc anual întrecerea fiind depășit doar de numărul celor care urmăresc meciurile din Campionatul Mondial de Fotbal și Jocurile Olimpice, competiții care se organizează o dată la patru ani.
		    </p>
			<p style="font-size:120%;">În Campionatul Mondial de Formula 1 pot participa doar piloții care au primit din partea FIA o superlicență. Pentru a primi superlicența, un pilot trebuie să fi participat în campionatele inferioare Formulei 1 cum ar fi Formula Ford, Formula Renault, Formula 3, GP2 și să fi parcurs un anumit număr de kilometri într-un monopost de Formula 1 în mai multe zile consecutive.
			</p> 
			<p style="font-size:120%;">Campionatul se desfășoară pe baza unui regulament tehnic și a unuia sportiv, ambele întocmite de FIA și care se pot modifica din timp în timp. Chiar dacă aceste regulamente impun limite, există mult spațiu de mișcare din partea echipelor, astfel că anual sunt investite sute de milioane de dolari în cercetare și dezvoltare. Bugetele echipelor nu sunt făcute publice, dar se zvonește că echipele de top au bugete ce sunt în jurul a, sau trec de, 500 de milioane de dolari anual.
			</p> 
			<p style="font-size:120%;">Spre exemplu motoarele sunt limitate la 2.400 cmc, în configurația cilindrică V8 la 90 de grade, dar nu există limitări la nivelul puterii acestora (care este în medie 800 CP). Există însă din 2007 încolo o limită la nivelul turațiilor pe minut la 19.000.
			</p> 
			<p style="font-size:120%;">Formula 1 este un sport deosebit de periculos. Zeci de piloți, oficiali de traseu și chiar spectactori au decedat în urma unor accidente produse din 1950 încoace, printre care nume celebre ca Peter Collins, Wolfgang von Trips, Jochen Rindt, Ronnie Peterson, Gilles Villeneuve sau Ayrton Senna.
			</p>
			<hr style="width: 100%; color: black; height: 5px; background-color:#e3e3e3;" />
		</div>
		
		<div style="font-size:110%;" id="section2">
			<h2>Lista cu Campioni</h2>
			<?php
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

				$tsq3 = "select AnMondiala, Nume + ' ' + Prenume as Pilot, me.TaraNatala, e.NumeEchipa, e.TaraEchipei, mo.Circuit from Mondiale mo inner join Membri me on mo.MembruID = me.MembruID inner join Echipe e on me.EchipaID = e.EchipaID";
				$getResults3 = $conn->prepare($tsq3);
				$getResults3->execute();
				
				table($getResults3);
			?>
			<p></p>
			<hr style="width: 100%; color: black; height: 5px; background-color:#e3e3e3;" />
		</div>
		
		
		<div style="font-size:110%;" id="section3">
		<h2>Echipe</h2>
		<?php
			$tsq4 = "select e.NumeEchipa, e.TaraEchipei, m.Producator + ' ' + m.Model  as Masina, m.An as AnulMasinii from Echipe e inner join Masini m on e.EchipaID = m.MasinaID order by e.NumeEchipa";
			$getResults4 = $conn->prepare($tsq4);
			$getResults4->execute();
			
			table($getResults4);
			echo '<br>';
			
			
			function textBoldUnderline($getResult, $conn){
				$result = $getResult->fetchAll(PDO::FETCH_ASSOC);
				foreach($result as $x)
					foreach($x as $y){
						echo '<b><u>'.$y.'</u></b><br>'."Membrii echipei";
						
						$tsq6 = "select Rol, Nume,Prenume from Membri m inner join Echipe e on m.EchipaID = e.EchipaID where e.NumeEchipa = '$y'";
						$getResults6 = $conn->prepare($tsq6);
						$getResults6->execute();
						
						$result2 = $getResults6->fetchAll(PDO::FETCH_ASSOC);
						
						$aux = 0;
						foreach($result2 as $x2){
							if($aux != 0) echo '<custom style="padding-left:12em">';
							else		 echo '<custom style="padding-left:5em">';
							foreach($x2 as $y2){
								echo $y2." ";
							}
							echo '</custom><br>';
							$aux = 1;
						}
						echo '<br>';
						
						echo "Titluri Mondiale";
						
						$tsq7 = "select count(e.EchipaID) as Titluri from Echipe e inner join Mondiale m on e.EchipaID = m.EchipaID where e.NumeEchipa = '$y';";
						$getResults7 = $conn->prepare($tsq7);
						$getResults7->execute();
						
						$result3 = $getResults7->fetchAll(PDO::FETCH_ASSOC);
						
						foreach($result3 as $x3){
							echo '<custom style="padding-left:5.2em">';
							foreach($x3 as $y3){
								echo $y3." ";
							}
							echo '</custom><br>';
						}
						echo '<br>';
						
						echo "Sponsori";
						
						$tsq8 = "select s.Nume from Sponsori s inner join EchipeSponsori es on es.SponsorID = s.SponsorID inner join Echipe e on es.EchipaID = e.EchipaID where e.NumeEchipa = '$y';";
						$getResults8 = $conn->prepare($tsq8);
						$getResults8->execute();
						
						$result4 = $getResults8->fetchAll(PDO::FETCH_ASSOC);
						$aux = 0;
						foreach($result4 as $x4){
							if($aux != 0) echo '<custom style="padding-left:12em">';
							else		 echo '<custom style="padding-left:8em">';
							foreach($x4 as $y4){
								echo $y4." ";
							}
							echo '</custom><br>';
							$aux = 1;
						}
						echo '<br>';
					}
				
			}
			
			$tsq5 = "select NumeEchipa from Echipe order by NumeEchipa";
			$getResults5 = $conn->prepare($tsq5);
			$getResults5->execute();
			
			textBoldUnderline($getResults5, $conn);
			
		?>
		<p></p>
		<hr style="width: 100%; color: black; height: 5px; background-color:#e3e3e3;" />
		</div>
		
		<div style="font-size:110%;" id="section4">
		<h2>Pilotii</h2>
		<?php
			$tsq9 = "select m.Nume +' ' +  m.Prenume as Pilot, m.TaraNatala,e.NumeEchipa, e.TaraEchipei from Echipe e inner join Membri m on e.EchipaID = m.EchipaID where m.Rol = 'Pilot' and year(m.DataPlecarii) = 4000 order by m.Nume,m.Prenume";
			$getResults9 = $conn->prepare($tsq9);
			$getResults9->execute();
			
			table($getResults9);
		?>
		<p></p>
		<hr style="width: 100%; color: black; height: 5px; background-color:#e3e3e3;" />
		</div>
		
		
		<div style="font-size:110%;" id="section5">
		<h2>Curiozitati</h2>
		Pilotii cu cele mai multe titluri mondiale:
		<br>
		<?php
			$tsq19 = "select x.Nume, x.Prenume, sum(x.NumarMondiale) as TitluriMondiale from (select me.Nume, me.Prenume,mo.MembruID,count(mo.MembruID) as NumarMondiale from Mondiale mo inner join Membri me on me.MembruID = mo.MembruID group by mo.MembruID,me.Nume, me.Prenume ) as x group by x.Nume, x.Prenume order by TitluriMondiale desc";
			$getResults19 = $conn->prepare($tsq19);
			$getResults19->execute();
			
			table($getResults19);
		?>
		<br>
		Echipa cu cele mai multe titluri, din 2000 pana in prezent, este:
		<?php
			$tsq20 = "select e.NumeEchipa, count(mo.EchipaID) from Mondiale mo inner join Echipe e on e.EchipaID = mo.EchipaID group by mo.EchipaID,e.NumeEchipa having count(mo.EchipaID) >= all(select count(EchipaID) from Mondiale group by EchipaID)";
			$getResults20 = $conn->prepare($tsq20);
			$getResults20->execute();
			$result20 = $getResults20->fetchAll(PDO::FETCH_ASSOC);
			$aux = 0;
			foreach($result20 as $x){
				foreach($x as $y){
					if($aux == 0)	echo " ".$y." (";
					if($aux == 1)	echo $y." titluri mondiale)";
					$aux = $aux + 1;
				}
			}
		?>
		<br>
		<br>
		Tara cu cele mai multe sedii de echipe de F1 este: 
		<?php
			$tsq21 = "select TaraEchipei,count(TaraEchipei) from Echipe group by TaraEchipei having count(TaraEchipei) >= all (select count(TaraEchipei) from Echipe group by TaraEchipei)";
			$getResults21 = $conn->prepare($tsq21);
			$getResults21->execute();
			$result21 = $getResults21->fetchAll(PDO::FETCH_ASSOC);
			$aux = 0;
			foreach($result21 as $x){
				foreach($x as $y){
					if($aux == 0)	echo " ".$y." (";
					if($aux == 1)	echo $y." sedii)";
					$aux = $aux + 1;
				}
			}
		?>
		<br>
		<br>
		Circuitul cel mai des folosit, din 2000 pana in prezent, este:
		<?php
			$tsq22 = "select Circuit from Mondiale group by Circuit having count(Circuit) = (select max(Nr) from (select count(Circuit) as Nr from Mondiale group by Circuit) as x )";
			$getResults22 = $conn->prepare($tsq22);
			$getResults22->execute();
			$result22 = $getResults22->fetchAll(PDO::FETCH_ASSOC);
			foreach($result22 as $x){
				foreach($x as $y){
					echo " ".$y;
				}
			}
		?>
		
		
		<p></p>
		<hr style="width: 100%; color: black; height: 5px; background-color:#e3e3e3;" />
		</div>
		
		
		<div id="section6">
		<h2>Imagini</h2>
		<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
				<div class="item active">
				  <img src="photo1.jpg" alt="F1">
				</div>

				<div class="item">
				  <img src="photo2.jpg" alt="F1">
				</div>

				<div class="item">
				  <img src="photo3.jpg" alt="F1">
				</div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			  </a>
		</div>
		<br>
		</div>
		
	</div>
</div>

</div>

</body>
</html>
