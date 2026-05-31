<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<!-- Adrese za fajlove, ukljucujuci iz skinutih biblioteka bootstrap i jquery -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<title>Kapedak | Pocetna stranica </title>
</head>
<body>
	<!-- Obojen sablon na vrhu stranice sa menijima -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Titl i logo -->				
			<div style="display: flex;">
				<a class="navbar-brand" href="index.php">Market Dragih Kamenja "Kapedak"</a>				
			</div>
			<img src="img/logo.webp" alt="logo" style="display: flex; flex-shrink: 50%; width: 10%; height: auto; filter:invert(100%);">		
			<!-- Ulog ili registracija TEST -->
			<div class="dropdown">
 				<button class="dropmenu">Nalog</button>
 				<div class="dropdown-content">
 					<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Uloguj se</button>
 					<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Registracija</button>
 					<div id="id01" class="modal">
  				<form class="modal-content animate" action="/action_page.php" method="post">
    			<div class="imgcontainer">
      				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      				<img src="img-png/avatar.png" alt="avatar" class="avatar">
    			</div>
    			<div class="container">
      				<label for="uname"><b>Ime korisnika</b></label>
      				<input type="text" placeholder="Enter Username" name="uname" required>
      				<label for="psw"><b>Sifra</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required>
      				<button type="submit">Uloguj se</button>
      				<label>
        				<input type="checkbox" checked="checked" name="remember">Zapamti me
      				</label>
    			</div>
    				<div class="container" style="background-color:#f1f1f1">
      					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Nazad</button>
      					<span class="psw"><a href="#">Zaboravili ste sifru?</a></span>
    				</div>
  				</form>
				</div>
				<script>
				var modal = document.getElementById('id01');
				window.onclick = function(event) {
    			if (event.target == modal) {
        		modal.style.display = "none";
    				}
				}
				</script>
  				</div>
			</div>
			<!-- Shortcut-ovi stranica -->			
			<div style="display: flex">
				<ul class="menubar">
				<li><a href="index.php">Pocetna</a></li>
				<li><a href="market.php">Market</a></li>
				<li><a href="servis.php">Servisi</a></li>								
				<li><a href="onama.php">O Nama</a></li>
				<li><a href="kontakt.php">Kontakti</a></li>
				</ul>					
			</div>
		</div>
	</nav>
</body>
</html>