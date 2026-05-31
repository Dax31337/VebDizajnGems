<?php include('web/header.php');?>
	<div class="container" style="padding: 0px;">
		<img src="img-png/onama.png" alt="onama" style="display: flex; max-width: 100%; height: auto;">
	</div>
	<div>
		<h2 style="text-align: center;">O Nama</h2>
	</div>
	<div>
		<h2 style="text-align: center;">Upozajte nase kolege i koleginjice, uz koje nas biznis sjaji!</h2>
	</div>
	<button type="button" onclick="loadDoc()">Pogledaj listu</button>
	<div class="divliste" style="text-align: center;">
		<table id="lista"></table>		
	</div>
	<script>
	function loadDoc() {
  		const xhttp = new XMLHttpRequest();
  		xhttp.onload = function() {
    	myFunction(this);
  	}
  	xhttp.open("GET", "user/employees.xml");
  	xhttp.send();
	}
	function myFunction(xml) {
  		const xmlDoc = xml.responseXML;
  		const x = xmlDoc.getElementsByTagName("employee");
  		let table="<tr><th>Ime i Prezime</th><th>Titl</th></tr>";
  		for (let i = 0; i <x.length; i++) { 
    		table += "<tr><td>" +
    		x[i].getElementsByTagName("alias")[0].childNodes[0].nodeValue + "</td><td>" +
    		x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue + "</td></tr>";
  		}
  		document.getElementById("lista").innerHTML = table;
	}
	</script>
<?php include('web/footer.php');?>