<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<!-- Adrese za fajlove, ukljucujuci iz skinutih biblioteka bootstrap i jquery -->
	<link rel="stylesheet" href="assets/bootstrap-5.3.8-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="assets/bootstrap-5.3.8-dist/js/bootstrap.js"></script>
	<title>Kapedak | Pocetna stranica </title>
</head>
<body>
	<!-- Obojen sablon na vrhu stranice sa menijima -->
	<script type="text/javascript" src="assets/bootstrap-5.3.8-dist/dist/js/bootstrap.bundle.min.js"></script>
	<nav class="navigacija navigacija-glavna">
		<div class="container-fluid">
			<!-- Titl i logo -->				
			<div style="display: flex;">
				<a class="navigacija-brend" href="index.php">Market Dragih Kamenja "Kapedak"</a>				
			</div>
			<img src="img/logo.webp" alt="logo" style="display: flex; flex-shrink: 50%; width: 10%; height: auto; filter:invert(100%);">		
			<!-- Ulog ili registracija TEST -->
			<div class="dropdown">
 				<button class="dropmenu">Nalog</button>
 				<div class="dropdown-content">
 					<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Uloguj se</button>
 					<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Registracija</button>
 					<div id="modal-prozor" class="modal">
  				<form class="modal-sadrzaj modal-animacija" action="/action_page.php" method="post">
    			<div class="imgcontainer">
      				<span onclick="document.getElementById('modal-prozor').style.display='none'" class="zatvori" title="Zatvori Modal">&times;</span>
      				<img src="img-png/avatar.png" alt="avatar" class="avatar">
    			</div>
    			<div class="container">
      				<label for="korisnik"><b>Ime korisnika</b></label>
      				<input type="text" placeholder="Enter Username" name="korisnik" required>
      				<label for="sifra"><b>Sifra</b></label>
      				<input type="password" placeholder="Enter Password" name="sifra" required>
      				<button type="submit">Uloguj se</button>
      				<label>
        				<input type="checkbox" checked="checked" name="remember">Zapamti me
      				</label>
    			</div>
    				<div class="container" style="background-color:#f1f1f1">
      					<button type="button" onclick="document.getElementById('modal-prozor').style.display='none'" class="nazad-dugme">Nazad</button>
      					<span class="sifra"><a href="#">Zaboravili ste sifru?</a></span>
    				</div>
  				</form>
				</div>
				<script>
				var modal = document.getElementById('modal-prozor');
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
				<ul class="meni">
				<li><a href="index.php">Pocetna</a></li>
				<li><a href="market.php">Market</a></li>
				<li><a href="servis.php">Servisi</a></li>								
				<li><a href="onama.php">O Nama</a></li>
				<li><a href="kontakt.php">Kontakti</a></li>
				</ul>					
			</div>
			<button onclick="darkmod()">Crna pozadina</button>
		</div>
	</nav>
<script>
function darkmod() {
   var element = document.body;
   element.classList.toggle("darkmod");
}
</script>

<script>
function podesiKolacic(imeK,varK,datumK) {
  const d = new Date();
  d.setTime(d.getTime() + (datumK*24*60*60*1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = imeK + "=" + varK + ";" + expires + ";path=/";
}

function uzmiKolacic(imeK) {
  let ime = imeK + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(ime) == 0) {
      return c.substring(ime.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let korisnik = uzmiKolacic("korisnikIme");
  if (korisnik != "") {
    alert("Dobrodosli nazard " + korisnik);
  } else {
     korisnik = document.form("korisnik");
     if (korisnik != "" && korisnik != null) {
       podesiKolacic("korisnikIme", korisnik, 30);
     }
  }
}
</script>	
</body>
</html>