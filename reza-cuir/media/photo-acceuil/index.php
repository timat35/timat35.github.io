<?php

/*

Template Name: slider

*/

?> 

<?php get_header(); ?>


<div id="content">
	
	<ul id="autoWidth" class="cs-hidden">
		<li data-thumb="http://chez-clave.fr/reza/wp-content/uploads/2016/02/thumbs-portechequier-portefeuille-portemonnaie.jpg" >
			<img src="http://chez-clave.fr/reza/wp-content/uploads/2016/02/a-portechequier-portefeuille-portemonnaie.jpg" />
		</li>
		<li data-thumb="http://chez-clave.fr/reza/wp-content/uploads/2016/02/thumbs-portefeuille-multiples.jpg">
			<img src="http://chez-clave.fr/reza/wp-content/uploads/2016/02/a-portefeuille-multiples.jpg" />
		</li>
		<li data-thumb="http://chez-clave.fr/reza/wp-content/uploads/2016/02/thumbs-sac-besace-portefeuille-portemonnaie-bracelet.jpg">
			<img src="http://chez-clave.fr/reza/wp-content/uploads/2016/02/a-sac-besace-portefeuille-portemonnaie-bracelet.jpg" />
		</li>
		<li data-thumb="http://chez-clave.fr/reza/wp-content/uploads/2016/02/thumbs-sac-cabas-portefeuille-portemonnaie.jpg" >
			<img src="http://chez-clave.fr/reza/wp-content/uploads/2016/02/a-sac-cabas-portefeuille-portemonnaie.jpg" />
		</li>
		<li data-thumb="http://chez-clave.fr/reza/wp-content/uploads/2016/02/thumbs-sac-cabas-portefeuille.jpg" >
			<img src="http://chez-clave.fr/reza/wp-content/uploads/2016/02/a-sac-cabas-portefeuille.jpg" />
		</li>
		<li data-thumb="http://chez-clave.fr/reza/wp-content/uploads/2016/02/thumbs-sac-pochette-portemonnaie-etui-lunette.jpg" >
			<img src="http://chez-clave.fr/reza/wp-content/uploads/2016/02/a-sac-pochette-portemonnaie-etui-lunette.jpg" />
		</li>
	</ul>
	
	</div>


<?php get_footer(); ?>

<script type="text/javascript">

	jQuery(document).ready(function() {
		jQuery('#autoWidth').lightSlider({
			autoWidth:true,
			gallery: true,
			item: 2,
			speed:1000,
			pause:4000,
			auto:true,
			loop: true,
			pauseOnHover:true,
			pager:true,
			slideMargin: 4,
			thumbItem: 6,
			thumbMargin: 3,
			onSliderLoad: function() {
            jQuery('#autoWidth').removeClass('cS-hidden');
             } 
		});
	  });

</script>



