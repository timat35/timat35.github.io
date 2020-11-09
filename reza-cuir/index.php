

<?php  include('title/title_index.php');?>
<?php  include('header.php');?>



<div id="content">

	<div class="row">

		<div  class="col-3 d-none d-xl-block">
		</div>
	
		<div  class="col-xl-6 col-12 align-self-center text-left">
			<div>
				<p>
					<h5 class="text-center">Info période de confinement</h5>
					Nos petits commerces d’artisans sont fermés, le marché de Noël de Grenoble annulé… mais les commandes sont possibles ! </br>
					Pour cela vous pouvez me <a href="contact.php"> contacter</a> par mail pour me préciser l’article de votre choix. </br> 
					je peux ensuite vous faire un envoi postal ou vous pouvez venir récupérer votre commande à notre boutique de Grenoble</br> <a href="http://www.lachouettedoree.fr/" target="_blank">la chouette dorée</a> au horaires suivants : le mardi de 16h à 19h et le samedi de 10h à 13h.
				</p>

			</div>
		</div>


	</div>



<div class="slider d-none d-sm-block">
	<figure>
		<img src="/media/photo-acceuil/sac-bandouliere-vagabond-1.jpg" alt="sac-bandouliere-vagabond-1" />
	</figure>
	<figure>
		<img src="/media/photo-acceuil/bracelet-cuir-tissu-2.jpg" alt="bracelet-cuir-tissu-2"/>
	</figure>
	<figure>
		<img src="/media/photo-acceuil/sac-pochette-retro-2.jpg" alt="sac-pochette-retro-2" />
	</figure>
	<figure>
		<img src="/media/photo-acceuil/porte-monnaie-3poches-3.jpg" alt="porte-monnaie-3poches-3" />
	</figure>
	<figure>
		<img src="/media/photo-acceuil/sac-bandouliere-java-4.jpg" alt="sac-bandouliere-java-4" />
	</figure>
	<figure>
		<img src="/media/photo-acceuil/porte-monnaie-zip-5.jpg" alt="porte-monnaie-zip-5" />
	</figure>
	
</div>

<div class="slider  d-sm-none">
	<div>
		<img src="/media/photo-acceuil/thumb300-sac-bandouliere-vagabond-1.jpg" alt="thumb300-sac-bandouliere-vagabond-1" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb300-bracelet-cuir-tissu-2.jpg" alt="thumb300-bracelet-cuir-tissu-2"/>
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb300-sac-pochette-retro-2.jpg" alt="thumb-sac-pochette-retro-2" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb300-porte-monnaie-3poches-3.jpg" alt="thumb300-porte-monnaie-3poches-3" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb300-sac-bandouliere-java-4.jpg" alt="thumb300-sac-bandouliere-java-4" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb300-porte-monnaie-zip-5.jpg" alt="thumb-porte-monnaie-zip-5" />
	</div>
	
</div>

<div class="slider-nav-thumbnails d-none d-sm-block">
	<div>
		<img src="/media/photo-acceuil/thumb-sac-bandouliere-vagabond-1.jpg" alt="thumb-sac-bandouliere-vagabond-1" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb-bracelet-cuir-tissu-2.jpg" alt="thumb-bracelet-cuir-tissu-2"/>
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb-sac-pochette-retro-2.jpg" alt="thumb-sac-pochette-retro-2" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb-porte-monnaie-3poches-3.jpg" alt="thumb-porte-monnaie-3poches-3" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb-sac-bandouliere-java-4.jpg" alt="thumb-sac-bandouliere-java-4" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb-porte-monnaie-zip-5.jpg" alt="thumb-porte-monnaie-zip-5" />
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
<script type="text/javascript" src="/js/slick.js"></script>
<script type="text/javascript" src="/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="/js/reza.js?v=1"></script>
<script type="text/javascript">
	$('.slider').slick({

	 	slidesToShow: 3,
	 	slidesToScroll: 1,
		centerMode:true,
	 	arrows: false,
	 	fade: false,
		focusOnSelect: true,
		variableWidth: true,
		autoplay:true,
		autoplaySpeed:4000,
		speed:1000,
		initialSlide:0, 
		draggable:false,
	 	asNavFor: '.slider-nav-thumbnails',
	 	
	});
	$('.slider-nav-thumbnails').slick({
	 	slidesToShow: 6, // to edit if new slide 
	 	slidesToScroll: 1,
	 	asNavFor: '.slider',
	 	dots: false,
	 	arrows:false,
	 	focusOnSelect: true
	});
	
 //remove active class from all thumbnail slides
 $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
 //set active class to first thumbnail slides
 $('.slider-nav-thumbnails .slick-slide').eq(2).addClass('slick-active');
 // On before slide change match active thumbnail to current slide
 $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
 	var mySlideNumber = nextSlide;
 	$('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
 	$('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
});



</script>
</body>
</html>


