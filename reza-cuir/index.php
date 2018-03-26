

<?php  include('title/title_index.php');?>
<?php  include('header.php');?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/slick.js"></script>

<div id="content">
<div id="menuMobil">
	<div class ="textAnchor">
	<a href="/article-sac.php">
	<img class="respondHeight borderClass" src="/media/photo-menu-mobil/Smartphone-sac.jpg" alt="sac" />
	<h2>Sacs</h2>
	</div>
	</a>
	<a href="/article-maroquinerie.php">
	<div class ="textAnchor">
	<img class="respondHeight borderClass" src="/media/photo-menu-mobil/Smartphone-maroquinerie.jpg" alt="maroquinerie" />
	<h2>Petite maroquinerie</h2>
	</div>
	</a>
	<a href="/propos.php">
	<div class ="textAnchor">
	<img class="respondHeight borderClass" src="/media/photo-menu-mobil/Smartphone-apropos.jpg" alt="apropos" />
	<h2>À propos</h2>
	</div>
	</a>
	<a href="/contact.php">
	<div class ="textAnchor">
	<img class="respondHeight borderClass" src="/media/photo-menu-mobil/Smartphone-oumetrouver.jpg" alt="contact" />
	<h2>Où me trouver?</h2>
	</div>
	</a>
</div>
<div class="slider">
	<figure>
		<img src="/media/photo-acceuil/a-sac-rabat.jpg" alt="sac-rabat" />
	</figure>
	<figure>
		<img src="/media/photo-acceuil/a-bracelet-cuir-tissu.jpg" alt="bracelet-cuir-tissu"/>
	</figure>
	<figure>
		<img src="/media/photo-acceuil/a-portemonnaie.jpg" alt="portemonnaie" />
	</figure>
	<figure>
		<img src="/media/photo-acceuil/a-sac-besace.jpg" alt="sac-besace" />
	</figure>
	<figure>
		<img src="/media/photo-acceuil/a-portemonnaie-multipoche.jpg" alt="portemonnaie-multipoche" />
	</figure>
</div>
<div class="slider-nav-thumbnails">
	<div>
		<img src="/media/photo-acceuil/thumbs-sac-rabat.jpg" alt="thumbs-sac-rabat" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumbs-bracelet-cuir-tissu.jpg" alt="thumbs-bracelet-cuir-tissu"/>
	</div>
	<div>
		<img src="/media/photo-acceuil/thumbs-portemonnaie.jpg" alt="thumbs-portemonnaie" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumbs-sac-besace.jpg" alt="thumbs-sac-besace" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumbs-portemonnaie-multipoche.jpg" alt="thumbs-portemonnaie-multipoche" />
	</div>
</div>
</div>
</div>
<?php  include('footer.php');?>
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
	initialSlide:0, // to edit if new slide // change also in slick 1.1. css L22 nb of slide * 75 
	draggable:false,
 	asNavFor: '.slider-nav-thumbnails',
	});
	$('.slider-nav-thumbnails').slick({
 	slidesToShow: 5, // to edit if new slide 
 	slidesToScroll: 1,
 	asNavFor: '.slider',
 	dots: false,
 	arrows:false,
 	focusOnSelect: true,
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
	// Menu for smarphone fonction 
 	var maxHeight = 750;
	var hscreen = $(window).height(),
	height = hscreen > maxHeight ? maxHeight : hscreen;
	height = height/2.6
	$('.respondHeight').height(height);
	var imgWidth = $('.respondHeight').width();
	var menuWidth= $('#menuMobil').width();
	if ((menuWidth > 2.7*imgWidth) && (menuWidth < 4.1*imgWidth))  {
		$('#menuMobil').addClass("addMargin");
	} else {
		$('#menuMobil').removeClass("addMargin");
	} 
	if (menuWidth > 4.1*imgWidth) {
		height =  hscreen/2;
		$('.respondHeight').height(height);
	}
	$( window ).resize(function() {  
	var maxHeight = 750;
    var hscreen = $(window).height(),
    height = hscreen > maxHeight ? maxHeight : hscreen;
	height = height/2.6
	$('.respondHeight').height(height);
	var imgWidth = $('.respondHeight').width();
	var menuWidth= $('#menuMobil').width();
	if ((menuWidth > 2.7*imgWidth) && (menuWidth < 4.1*imgWidth))  {
		$('#menuMobil').addClass("addMargin");
	} else {
		$('#menuMobil').removeClass("addMargin");
	} 
	if (menuWidth > 4.1*imgWidth) {
		height =  hscreen/2;
		$('.respondHeight').height(height);
	}
	});
</script>
</body>
</html>


