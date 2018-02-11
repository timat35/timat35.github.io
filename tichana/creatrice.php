
<!--?php  include('title/title_sacs.php');?-->
<?php  include('header.php');?>



<div id="content" class ="container">

	<div class="row text_center">
		<img id ="logo" src=""></img/>
	</div>
	<div class="row text_center">
		<h2><a id="crea_title"></a></h2>
	</div>
	<div class="row text_center">
		<a id="crea_sub"></a>
	</div>
	<div class="row text_center">
		<a id="crea_link"></a>
	</div>
</div>


<div class="grid">
  <div id ="crea_grid" class="grid-sizer"></div>
  <!--div class="grid-item">
    <img src="img/reza/img_1.jpg" />
  </div>
  <div class="grid-item">
     <img src="img/reza/img_2.jpg" />
  </div>
  <div class="grid-item">
     <img src="img/reza/img_3.jpg" />
  </div-->
</div>

</div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/main.js?v=1.5"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/jquery.event.move.js"></script>
<script type="text/javascript" src="js/jquery.event.swipe.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox_swipe.js?v=2.1.5"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type="text/javascript">

var name = <?php echo json_encode($_GET['creatrice'])?>;
var img_files = <?php echo json_encode(glob('img/'.$_GET['creatrice'].'/*.*'))?>;
load_content(name, img_files)

// column width must be dynamic
	var $grid = $('.grid').masonry({
	  itemSelector: '.grid-item',
	  percentPosition: true,
	  columnWidth: 400,
	  fitWidth: true,
	  gutter:5
	});
	
	// layout Masonry after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.masonry();
	});  

$(document).ready(function() {

	$(".fancybox").fancybox({
			helpers : {
				overlay : {
					css: { 'background': 'rgba(0, 0, 0, 0.2)' }
				}
			},
			nextEffect :'fade',
			prevEffect: 'fade',
			openOpacity: false,
			closeOpacity: false
		});
	});
	
	
	
	$( '#toggle-menu' ).on( 'touchstart click', function(e) {
	  e.preventDefault();
	  var $body = $( 'body' ),
		  $content = $( '#content' ),
		  transitionEnd = 'transitionend webkitTransitionEnd otransitionend MSTransitionEnd';
		$body.addClass( 'animating' );
			if ( $body.hasClass( 'menu-visible' )) {
				$('#toggle-menu').removeClass('noDisplay')
				$body.addClass( 'up anim4' );
				} else {
				$('#toggle-menu').addClass('noDisplay')	
				$body.addClass( 'down anim4' );
				}

			$content.on( transitionEnd, function() {
				
				$body.removeClass( 'animating down up anim4' );
				$body.addClass( 'menu-visible anim4' );
				$content.off( transitionEnd );
			});
			setTimeout( function(){
				 $body.removeClass( 'animating down up anim4' );
				 $body.addClass( 'menu-visible anim4' );
				}, 300);
	 });
</script>


</body>
</html>


