
<!DOCTYPE html>

<html>

	<head>

		<title>Vjezba 1 - Programiranje za internet</title>
		<meta charset = "utf8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel = "stylesheet" href = "css/bootstrap.min.css" />

		<script type = "text/javascript" src = "js/bootstrap.min.js></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	</head>

	<body>
		<?php
			// spajanje na bazu podataka
			$servername = "localhost";
			$username = "root";
			$password = "";
			
			// try catch u slucaju errora
			try {
				$konekcija = new PDO("mysql:host=$servername;dbname=pzi", $username, $password);
				$konekcija->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connected successfully";
				}
			catch(PDOException $e)
				{
				$konekcija=NULL;
				echo "Connection failed: " . $e->getMessage();
				}

				//update korisnika sa id 3 na tip administator
				$sql = "UPDATE `korisnik` SET `TIP` = \'Administrator\' WHERE `korisnik`.`ID` = 3";
		?>
		<div class="container">
		
			<div class = "row mt-5">
				<div class = "col-4">
					<div class = "list-group">
						<a href = "#" class = "list-group-item active">Pocetna</a></li>
						<a href = "#" class = "list-group-item">O meni</a></li>
						<a href = "#" class = "list-group-item">Kontakt</a></li>
					</div>
				</div>
				<div class = "col-8">
					<h1>O meni</h1>
					<p>Ovo je text o meni</p>
				</div>
			</div>
	 
		</div>

	</body>


</html>	