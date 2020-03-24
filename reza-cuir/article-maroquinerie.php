
<?php  include('title/title_maro.php');?>
<?php  include('header.php');?>


<div class="slide_shadow">
</div>

<div id="content">

<div class="matPage">

<?php  include('menu_maroquinerie.php');?>

<div class="matContainer">
<section class="matTitle titleMobil">
<p id="articleTitleMobil">Portefeuille</p>
</section>
<div class="fancy_gallery">
<a id="fancy_r1"  class="fancyfake_before fancybox"  href="/media/photo-maroquinerie/portefeuille-1.jpg" rel="fancybox"></a>
<a id="fancy_r2" class="fancyfake_before fancybox" href="/media/photo-maroquinerie/portefeuille-2.jpg" rel="NO"></a>
<a id="fancy_r3" class="fancyfake_before fancybox" href="/media/photo-maroquinerie/portefeuille-3.jpg" rel="NO"></a>
<a id="fancy_r4" class="fancyfake_before fancybox" href="/media/photo-maroquinerie/portefeuille-4.jpg" rel="NO"></a>
</div>
<div>
<a id="fancy_base" class="fancybox" href="/media/photo-maroquinerie/portefeuille-2.jpg" rel="fancybox">
<img id="img_base" src="/media/photo-maroquinerie/portefeuille-2-320.jpg" alt="portefeuille-2"  class="articleMain borderClass " /></a>
</div>
<div class="fancy_gallery">
<a id="fancy_1"  class="fancyfake_after fancybox"  href="/media/photo-maroquinerie/portefeuille-1.jpg" rel="NO"></a>
<a id="fancy_2" class="fancyfake_after fancybox" href="/media/photo-maroquinerie/portefeuilles_2.jpg" rel="NO"></a>
<a id="fancy_3" class="fancyfake_after fancybox" href="/media/photo-maroquinerie/portefeuilles_3.jpg" rel="fancybox"></a>
<a id="fancy_4" class="fancyfake_after fancybox" href="/media/photo-maroquinerie/portefeuilles_4.jpg" rel="NO"></a>
</div>
<div class="description">
<section class="matTitle titleDesktop">
<p id="articleTitle">Portefeuille 69 euros</p>
</section>
<section class="textLong">
<p id="articleDescription">4 compartiments intérieurs dont un zippée pour la monnaie, 2 emplacements pour cartes de crédit, fermeture par pression, format passeport, cuir vachette pleine fleur.</p>
<p id="articleDimension">Dimensions: 15,5cm X 10cm.</p>

</section>
</div>
</div>
<img id="thumb_img_1" src="/media/photo-maroquinerie/portefeuille-1-100.jpg" alt="portefeuille-1"  onclick="changeImage(this)" class="articleView borderClass  " /><img id="thumb_img_2"  src="/media/photo-maroquinerie/portefeuille-2-100.jpg" alt="portefeuille-2" onclick="changeImage(this)" class="articleView borderClass " /><img id="thumb_img_3" src="/media/photo-maroquinerie/portefeuille-3-100.jpg" alt="portefeuille-3"  onclick="changeImage(this)"  class="articleView borderClass " /><img id="thumb_img_4" src="/media/photo-maroquinerie/portefeuille-4-100.jpg" alt="portefeuille-4"  onclick="changeImage(this)"  class="articleView borderClass " />
</div>



<section class="textLong titleMobil">
<p id="articleDescriptionMobil">4 compartiments intérieurs dont un zippée pour la monnaie, 2 emplacements pour cartes de crédit, fermeture par pression, format passeport, cuir vachette pleine fleur.</p>
<p id="articleDimensionMobil">Dimensions: 15,5cm X 10cm.</p>

</section>


</div>

<?php  include('footer.php');?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="/js/reza.js?v=1"></script>
<script type="text/javascript" src="/js/jquery.event.move.js"></script>
<script type="text/javascript" src="/js/jquery.event.swipe.js"></script>
<script type="text/javascript" src="/fancybox/jquery.fancybox_swipe.js?v=2.1.5"></script>
<script type="text/javascript" src="/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript" src="/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type="text/javascript">

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
			if ( $body.hasClass( 'menu-visible' ) ) {
				$('#toggle-menu').removeClass('noDisplay')
				$body.addClass( 'up anim7' );
				} else {
				$('#toggle-menu').addClass('noDisplay')	
				$body.addClass( 'down anim7' );
				}
			$content.on( transitionEnd, function() {
				$body
				.removeClass( 'animating down up anim7' )
				.addClass( 'menu-visible anim7' );
		 
				$content.off( transitionEnd );
			});
			setTimeout( function(){
				 $body.removeClass( 'animating down up anim7' );
				 $body.addClass( 'menu-visible anim7' );
				}, 300);
	 });
</script>
</body>
</html>



