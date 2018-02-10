
<!--?php  include('title/title_sacs.php');?-->
<?php  include('header.php');?>



<div id="content">

	<div>
		<img id ="logo"> </img/>
		<img id="crea_img"> </img/>
	<div>
	<div id="crea_text">
		<h1><a>title</a>
		<a class="subtitle">subtitle</a>
		<p class="desc">subtitle</p>
	<div>
	<div id ="slide">
	</div>
	<div id="crea_contact">
	<div>
	<div id="other_crea">
	
	<div>
	
	
	
	


</div>


</div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/main.js?v=1.5"></script>
<script type="text/javascript" src="js/jquery.event.move.js"></script>
<script type="text/javascript" src="js/jquery.event.swipe.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox_swipe.js?v=2.1.5"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type="text/javascript">

	var data = <?php echo json_encode($_GET['creatrice'])?>;
	console.log(data)


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


