
<?php  include('title/title_boutique.php');?>
<?php  include('header.php');?>


<div class="slide_shadow"></div>


<div class="container text-center">

	<div class="masonry_container">
		<div class="h3">
			<p>Boutiques</p>
		</div>

		<div id="div_boutique" class="row">

			<div class="col-12 mb-4 mt-2 ">
				<div class="row ">
					<div class="col-md-6 col-lg-4 col-col-12">
						<a href="http://www.lachouettedoree.fr/" target="_blank">
							<img src="media/photo-marche/boutique_chouette_doree.jpg">
						</a>
					</div>
					<div class="col text-md-left align-self-center ml-4">
						<div class="info text-boutique">
							<h5 class="mt-2 mt-md-0">La Chouette dorée</h5>
							<p>
								Une boutique collective d'artisans locaux<br>
								Où vous pouvez retrouver toute la collection Reza, ainsi que,<br>
								<a href="http://www.lachouettedoree.fr/creatrice.php?creatrice=chant" 
								style="text-decoration: underline; color: -webkit-link;" target="_blank">Le chant de l'émail</a>, céramique<br>
								<a href="https://www.eska-vetements.fr/" style="text-decoration: underline; color: -webkit-link;"  target="_blank">Eska</a>, Vêtements<br>
								<a href="http://www.lachouettedoree.fr/creatrice.php?creatrice=tet" style="text-decoration: underline; color: -webkit-link;" target="_blank">Têt'en l'air</a>, chapeaux et accessoires de tête<br>
								<a href="https://www.julia-belle.com/" style="text-decoration: underline; color: -webkit-link;" target="_blank">Julia Belle</a>, gravures.<br>
							</p>
							<p> 
								Vous pouvez m'y rencontrer lors de mes permanences: <a target="_blank" href="http://www.lachouettedoree.fr/boutique.php#calendar" style="text-decoration: underline; color: -webkit-link;">Agenda des permanences</a>
							</p>

							<p>
								7 rue du lieutenant Chanaron, 38000 Grenoble.<br>
								Du mardi au dimanche de 10h à 19h.
							</p>
							<div  class="">
								<a target="_blank"  href="https://www.facebook.com/lachouettedoree/"><img src="/media/photo-marche/Icone-Facebook.jpg" alt="Icone-Facebook"  width class="imgIcone" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 mb-4 mt-2 ">
				<div class="row ">
					<div class="col-md-6 col-lg-4 col-col-12">
						<a href="https://lafabriquedutrieves.jimdofree.com/" target="_blank">
							<img src="media/photo-marche/fabrique_trieve.png">
						</a>
					</div>
					<div class="col text-md-left align-self-center ml-4">
						<div class="info text-boutique">
							<h5 class="mt-2 mt-md-0">La fabrique du Trièves</h5>
							<p>
								La fabrique du Trièves est une association de petits producteurs et artisans locaux.<br>
								Elle a pour but de valoriser et promouvoir les artisans d'arts et producteurs du Trièves par la mise en valeur des productions et créations locales.<br>
							</p>
							<p>
								Place de la Halle, 38710 Mens.<br>
								Du mercredi au samedi de 9h à 13h et de 15h à 19h.
							</p>
							<div>
								<a target="_blank"  href="https://www.facebook.com/La-fabrique-du-tri%C3%A8ves-364716250226669/"><img src="/media/photo-marche/Icone-Facebook.jpg" alt="Icone-Facebook"  width class="imgIcone" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

	

	<div class="d-none masonry_container">
		<div class="h3">
			<p>Futur marché</p>
		</div>

		

		<div id="div_marche" class="d-row">

		</div>

	</div>

		

	<div class="masonry_container">

		<div class="h3 mb-4  text-decoration-underline">
			<p>Ancien marché</p>
		</div>

		<div class="row">
			<div id = "div_grid" class="grid">
			  <div id ="crea_grid" class="grid-sizer"></div>
			</div>
		</div>
	</div>



</div>


	





<?php  include('footer.php');?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="/js/jquery.event.move.js"></script>
<script type="text/javascript" src="/js/jquery.event.swipe.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="/js/reza.js?v=1"></script>

<script type="text/javascript">


$.ajaxSetup({
   async: false
 });

var img_files = <?php echo json_encode(glob('media/photo-marche/old/*.*'))?>;
load_marche(img_files);

var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  fitWidth: true,
  gutter:5,
});



// layout Masonry after each image loads
	

$grid.imagesLoaded().progress( function() {
	$grid.masonry();
});  
	

$(document).ready(function() {
	
	$.ajaxSetup({ cache: false });
	
	$(window).resize(function(){
		
		$grid.imagesLoaded().progress( function() {
			$grid.masonry();
		});  
	});
	
});




	
</script>

</body>
</html>