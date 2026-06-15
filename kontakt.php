<?php include('web/header.php');?>
	<div class="container" style="padding: 0px;">
		<img src="img/kontakt.webp" alt="kontakt" style="display: flex; max-width: 100%; height: auto;">
	</div>
	<div>
		<h2 style="text-align: center;">Kontakt</h2>
	</div>
	<div>
		<p style="text-align: center;">Imate posebna pitanja? Posaljite nam poruku!></p>
	</div>
	<div class="container">
	<form name="kontakt-forma" action="/action_page.php" onsubmit="return validacija()" method="post">
  		<label for="ime">Ime:</label><br>
  		<input type="text" id="ime" name="ime"><br>

 		<label for="prezime">Prezime:</label><br>
 		<input type="text" id="prezime" name="prezime"><br>

 	 	<label for="telefon">Telefon:</label><br>
 		<input type="tel" id="telefon" name="telefon"><br>	

 	 	<label for="ime">E-majl:</label><br>
 		<input type="email" id="emajl" name="emajl"><br>

 		<label for="lname">Poruka:</label><br>
 		<input type="text" id="poruka" name="poruka"><br><br>	

 		<input type="submit" value="Submit">
	</form> 		
	</div>
	</div>
<script>
function validacija() {
  let x = document.forms["kontakt-forma"]["ime"]["prezime"]["telefon"]["emajl"]["poruka"].value;
  if (x == "") {
    alert("Greska: Sva polja moraju biti popunjena.");
    return false;
  }
}
</script>
<?php include('web/footer.php');?>