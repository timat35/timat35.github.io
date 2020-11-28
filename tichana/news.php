
<?php  include('title/title_news.php');?>
<?php  include('header.php');?>



<div id="news" class ="container row">

	<div class="col-12 col-lg-9">


	

		
		
		<div class="row mb-4 justify-content-center">
			
			<div class="col-12 col-lg-9  mt-4">
				<div class="row">

					<div class="col-12 mb-4 encart">
						<div class="row">
			
							<div  class="col-6  text-right  ">
								<img   src="img/conf_chouette.jpg"  alt="" class="img-fluid" />
							</div>

							<div  class="col-6 align-self-center text-left">
								<div>
									<p>
										Le marché de Noël de Grenoble a été annulé, mais la boutique est ouverte!

										Vous pouvez retrouvez tous les produits de</br> 
										<a href="https://www.lechantdelemail.com/" target="_blank">Le chant de l'émail</a> /
										<a href="https://www.eska-vetements.fr/" target="_blank">Eska</a> /
										<a href="http://www.reza-cuir.com/" target="_blank">Réza</a> /
										<a href="https://www.directproducteur.com/tetenlair/" target="_blank">Têt-en-l'air</a> /
										<a href="https://www.julia-belle.com/" target="_blank">Julia Belle</a> </br>
										<strong>du mardi au dimanche de 10h à 19h.</strong></br>

									</p>
								</div>
							</div>
						</div>

				</div>


				
					<!-- <div  class="col-8 text-center align-self-center ">
						<a href="http://www.lacordealinge-grenoble.com/championnet.html" target="_blank">
							<img   src="img/news/VideGrenier.jpg"  alt="" class="img-fluid" />
						</a>
					</div> -->
					<!-- <div  class="col-4 align-self-center">
						<div class="info">
							<h3>Vide Grenier</h3>
							<p>
							C'est le Vide Grenier du quartier Championnet</br> 
							Dimanche 28 Avril 2019 de 8h à 18h</br></br>
							La boutique sera ouverte toute la journée pour l'occasion.</br>
							</p>
						</div>
					</div> -->
					<!-- <div  class="col-12 text-center">
						<div>
							<h3>C'est noël</h3>
							<p>
							Ouverture exceptionnelle les dimanches 15 et 22 décembre et lundi 23 décembre 10h-19h.</br>
							</p>
						</div>
					</div> -->
				</div>
			</div>
			
		</div>


		
<!-- 		<div class="row justify-content-center">
			<div class="col-12 col-lg-9  border-bottom border-dark  mb-4"></div>
		</div> -->
		
		
<!-- 		<div class="col-12 text-center">
			<h2>En parallele</h2>
		</div> -->
		
		<div id = "div_marche" class="d-none row mb-4 ml-md-4">
			
		</div>
		
	</div>
	
	<div class="col-12 col-lg-3 d-none d-md-block">
		<div class="col-12 text-center">

			<div class="fb-page mt-4" data-href="https://www.facebook.com/lachouettedoree/" data-tabs="timeline, events" data-width="500" data-height="800" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" >
				<blockquote cite="https://www.facebook.com/lachouettedoree/" class="fb-xfbml-parse-ignore">
					<a href="https://www.facebook.com/lachouettedoree/">La chouette dorée</a>
				</blockquote>
			</div>
		</div>
		
	</div>
	
</div>


<?php  include('footer.php');?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/moment.js'></script>
<script type="text/javascript" src="js/main.js?v=18112020"></script>

<script type="text/javascript">

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$(document).ready(function() {
	
	$.ajaxSetup({ cache: false });
	load_news();

});

	
</script>


</body>
</html>


