
<?php  include('title/title_news.php');?>
<?php  include('header.php');?>



<div id="news" class ="container row">

	<div class="col-12 col-lg-9">

		
		<div class="row mb-4 justify-content-center">
			
			<div class="col-12 col-lg-9 mt-4">
				<div class="row">
				
					<div  class="col-8 text-center align-self-center ">
						<img   src="img/news/vernissage.jpg"  alt="" class="img-fluid" />
					</div>
					<div  class="col-4 align-self-center">
						<div class="info">
							<h3>Vernissage</h3>
							<h5></h5>
							<p>
							Vernissage de la boutique, découverte et apéro.</br>
							Le jeudi 26 avril à partir de 17h.</br>
							</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="row justify-content-center">
			<div class="col-12 col-lg-9  border-bottom border-warning  mb-4"></div>
		</div>
		
		
		<div class="col-12 text-center">
		<h2>En parallele</h2>
		</div>
		
		<div id = "div_marche" class="row mb-4 ml-md-4">
			
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
<script type="text/javascript" src="js/main.js?v=1.5"></script>

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


