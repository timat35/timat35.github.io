

<?php  include('title/title_index.php');?>
<?php  include('header.php');?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/slick.js"></script>

<div id="content">

<div class="slider">
	<figure>
		<img src="/media/photo-acceuil/sac-bandouliere-vagabond-1.jpg" alt="sac-bandouliere-vagabond-1" />
	</figure>
	<figure>
		<img src="/media/photo-acceuil/bracelet-cuir-tissu-2.jpg" alt="bracelet-cuir-tissu-2"/>
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
<div class="slider-nav-thumbnails">
	<div>
		<img src="/media/photo-acceuil/thumb-sac-bandouliere-vagabond-1.jpg" alt="thumb-sac-bandouliere-vagabond-1" />
	</div>
	<div>
		<img src="/media/photo-acceuil/thumb-bracelet-cuir-tissu-2.jpg" alt="thumb-bracelet-cuir-tissu-2"/>
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
	 	responsive: [
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
	  	]
	});
	$('.slider-nav-thumbnails').slick({
	 	slidesToShow: 5, // to edit if new slide 
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


	// // Menu for smarphone fonction 
 // 	var maxHeight = 750;
	// var hscreen = $(window).height(),
	// height = hscreen > maxHeight ? maxHeight : hscreen;
	// height = height/2.6
	// $('.respondHeight').height(height);
	// var imgWidth = $('.respondHeight').width();
	// var menuWidth= $('#menuMobil').width();
	// if ((menuWidth > 2.7*imgWidth) && (menuWidth < 4.1*imgWidth))  {
	// 	$('#menuMobil').addClass("addMargin");
	// } else {
	// 	$('#menuMobil').removeClass("addMargin");
	// } 
	// if (menuWidth > 4.1*imgWidth) {
	// 	height =  hscreen/2;
	// 	$('.respondHeight').height(height);
	// }
	// $( window ).resize(function() {  
	// var maxHeight = 750;
 //    var hscreen = $(window).height(),
 //    height = hscreen > maxHeight ? maxHeight : hscreen;
	// height = height/2.6
	// $('.respondHeight').height(height);
	// var imgWidth = $('.respondHeight').width();
	// var menuWidth= $('#menuMobil').width();
	// if ((menuWidth > 2.7*imgWidth) && (menuWidth < 4.1*imgWidth))  {
	// 	$('#menuMobil').addClass("addMargin");
	// } else {
	// 	$('#menuMobil').removeClass("addMargin");
	// } 
	// if (menuWidth > 4.1*imgWidth) {
	// 	height =  hscreen/2;
	// 	$('.respondHeight').height(height);
	// }
	// });
</script>
</body>
</html>


