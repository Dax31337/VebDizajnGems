<?php include('web/header.php');?>
	<div class="container" style="padding: 0px;">
		<img src="img/index.webp" alt="index" style="display: flex; max-width: 100%; height: auto;">
	</div>
	<div>
		<h2 style="text-align: center; ">Dobro dosli na oficijalnu stranicu "Kapedak" !</h2>
	</div>
<!-- Rotirajuce slike na pocetnoj stranici sa tekstom -->
<div class="container" style="width: 100%; border: 2px solid; border-color: #6DAA79; border-radius: 8px; padding: 5px;">
	<div id="karosel" class="carousel slide" data-bs-ride="carousel">
  		<div class="carousel-inner">
    		<div class="carousel-item active">
				<img src="img/oniks-index.webp" alt="Oniks drago kamenje za nakit" class="d-block w-100">
				<div class="carousel-caption">
					<h3 style="font-size: 55px;">Crna boja diktira moć i poštovanje</h3>
					<h1 style="font-size: 20px;">Crna kao oniks, obsidijan i djet</h1>
				</div>
    		</div>
    		<div class="carousel-item">
				<img src="img/djejd-index.webp" alt="Djejd drago kamenje za nakit" class="d-block w-100">
				<div class="carousel-caption">
					<h3 style="font-size: 55px;">Duhovna energija iz kamenja</h3>
					<h1 style="font-size: 20px;">Djejd i akvamarin za Vašu dušu i zdravost</h1>
				</div>
    		</div>
    		<div class="carousel-item">
				<img src="img/svelerajt-index.webp" alt="Svelerajt drago kamenje za nakit" class="d-block w-100">
				<div class="carousel-caption">
					<h3 style="font-size: 55px;">Stavi vatrene boje na sebe</h3>
					<h1 style="font-size: 20px;">Rubi, svelerajt, heliodor - sve nijanse plamena</h1>
				</div>
			</div>
  		</div>
  	<button class="carousel-control-prev" type="button" data-bs-target="#karosel" data-bs-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="visually-hidden">Previous</span>
  	</button>
  	<button class="carousel-control-next" type="button" data-bs-target="#karosel" data-bs-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="visually-hidden">Next</span>
  	</button>
	</div>
</div>	
<div class="container" style="width: 100%; border: 2px solid; border-color: #6DAA79; border-radius: 8px; padding: 15px;">
	<div class="row">
		<div class="col" style="border: 2px solid; border-color: #6DAA79; border-radius: 8px; padding: 15px;">
			<div class="col">
				<h2 class="glavno"> Sjajni poklon za Vase najbolje </h2>
			</div>
			<div class="col">
				<p class="glavno"> Prstenovi, mindjuse, narukvice, ogrlice, i mnogo vise - pronadjite njihov omiljeni dragi kamen kod nas. </p>
			</div>
		</div>			
		<div class="col">
			<iframe width="420" height="315"
				src="https://www.youtube.com/embed/32jIwYgMLp0?autoplay=1&mute=1">
			</iframe>					
		</div>	
	</div>
</div>
<div class="container" style="width: 100%; border: 2px solid; border-color: #6DAA79; border-radius: 8px; padding: 15px;">
	<div class="row">
		<div class="col" style="border: 2px solid; border-color: #6DAA79; border-radius: 8px; padding: 15px;">
			<div class="col">
				<h2 class="glavno"> Egzoticno, industrijsko, kao pravo! </h2>
			</div>
			<div class="col">
				<p class="glavno"> Nudivo Vam ponude na razlicite vrste zlatnih legura, kao sto je rozen zlato, tumbaga, ljubicasto zlato, i vise. I ne samo to - vec i industrijske dijamante i slicne karbon-bazirane dragulje. </p>
			</div>
		</div>
		<div class="col">
			<video width="500" height="500" controls preload>
				<source src="vid/Making Nordic Gold - NileRed.webm" type="video/webm">
			</video>	
		</div>				
	</div>
</div>
<div class="container" style="width: 100%; border: 2px solid; border-color: #6DAA79; border-radius: 8px; padding: 15px;">
	<div class="row">
		<div class="col" style="border: 2px solid; border-color: #6DAA79; border-radius: 8px; padding: 15px;">
			<div class="col">
				<h2 class="glavno"> Gde najblize za rukovanje? </h2>
			</div>
			<div class="col">
				<p class="glavno"> Nase glavno sediste sa nalazi ovde - posetite nas! </p>
			</div>
		</div>
		<div class="col">
			<div id="gugl-mapa" style="width:100%; height:400px;"></div>	
		</div>		
	</div>
</div>
<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(50,2),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("gugl-mapa"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>	
<?php include('web/footer.php');?>
