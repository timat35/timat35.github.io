
<?php  include('title/title_propos.php');?>
<?php  include('header.php');?>


<div class="slide_shadow"></div>


<div class="masonry_container">
	<div class="row">
		<div id = "div_grid" class="grid">
		  <div id ="crea_grid" class="grid-sizer"></div>
			<div id = "btn_more" class="col down d-none d-md-block">
				<button class="link_more">Plus de photos</button >
			</div>
		</div>
	</div>
</div>

<div class="text_atelier">
  <div>
		<div class="h5">
			<p>La créatrice</p>
		</div>
		<div class="text-left">
			<p>c'est Elisa...formée au métier du cuir en tant que bottière chez les Compagnons du Devoir, et qui maintenant confectionne des sacs et accessoires en cuir.</p>
		</div>
	</div>
	

	<div>
		<div class="h5">
			<p>L'atelier</p>
		</div>
		<div class="text-left">
		<p>est à son domicile à Lavars dans le trièves.
		La fabrication est entièrement artisanale. Elle travaille seule et réalise toutes les étapes de fabrication: de l'idée au produit fini, en passant par le dessin, le patronage, le choix des matières premières, la coupe, le parage, l'assemblage et la couture. Les sacs, portefeuilles et autres accessoires sont des modèles uniques: un même gabarit décliné avec des cuirs et doublures différentes.</p>
		</div>
	</div>

	<div>
		<div class="h5">
			<p>Les cuirs</p>
		</div>
	<div class="text-left">
			<p>proviennent de tanneries françaises et italiennes. Un intérêt majeur est accordé au choix du cuir qui détermine ensuite la qualité des fabrications. Seuls les cuirs de bovins (vachette et veau) sont utilisés pour offrir des produits durables.</p>
		</div>
	</div>
</div>



<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<?php  include('footer.php');?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/photoswipe.js"></script>
<script type="text/javascript" src="js/photoswipe-ui-default.js"></script>
<script type="text/javascript" src="/js/reza.js?v=1"></script>

<script type="text/javascript">

var img_files = <?php echo json_encode(glob('media/photo-atelier/*.*'))?>;
console.log(img_files);
load_content(img_files);

var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  fitWidth: true,
  gutter:5
});



// layout Masonry after each image loads
	

$grid.imagesLoaded().progress( function() {
	$grid.masonry();
});  
	

$(document).ready(function() {
	
	$.ajaxSetup({ cache: false });
	
	w_w = $(window).width();
 //    if (w_w <798){
	// 	document.getElementById("header").className = 'container-fluid';
	// 	document.getElementById("nav_id").className = 'navbar navbar-expand-md ';
	// 	document.getElementById("small-header").className = 'navbar-brand nav-center d-none';
 //    }
	// else {
	// 	document.getElementById("header").className = 'container-fluid d-none';
	// 	document.getElementById("nav_id").className = 'navbar navbar-expand-md creatrice ';
	// 	document.getElementById("small-header").className = 'navbar-brand nav-center ';
		
	// }
	
	$(window).resize(function(){
		
		w_w = $(window).width();
		// if (w_w <798){
		// 	document.getElementById("header").className = 'container-fluid';
		// 	document.getElementById("nav_id").className = 'navbar navbar-expand-md ';
		// 	document.getElementById("small-header").className = 'navbar-brand nav-center d-none';
		// }
		// else {
		// 	document.getElementById("header").className = 'container-fluid d-none';
		// 	document.getElementById("nav_id").className = 'navbar navbar-expand-md creatrice ';
		// 	document.getElementById("small-header").className = 'navbar-brand nav-center ';
			
		// }
		
		$grid.imagesLoaded().progress( function() {
			$grid.masonry();
		});  
	});
	
});

var pswpElement = document.querySelectorAll('.pswp')[0];


$(".link_more").click(function(){
	
	if (this.parentNode.classList.contains("down")) {

		this.innerHTML= "Moins de photos"
		this.parentNode.setAttribute("class", "col up d-none d-md-block")

		var new_img = load_more(name, img_files);
		var $new_img = $( new_img );
		$grid.append( $new_img ).masonry( 'appended', $new_img );

	}
	else {
		
		this.innerHTML= "Plus de photos"
		this.parentNode.setAttribute("class", "col down d-none d-md-block")

		var obj = $('.grid-item.more');
		$grid.masonry('remove',obj);
	}
	
	$grid.imagesLoaded().progress( function() {
		$grid.masonry();
	});  
});

$('.grid').on('click', 'figure', function(event) {
	event.preventDefault();
	var items = get_items();
	

	var $index = Number($(this).attr('ind'))
    var options = {
        index: $index,
		showHideOpacity:true,
		getThumbBoundsFn : function(index) {
			var thumbnail = items[index].el;
			var pageYScroll = window.pageYOffset || document.documentElement.scrollTop;
			var rect = thumbnail.getBoundingClientRect();
			return {x: rect.left, y: rect.top + pageYScroll, w: rect.width};
        }
	}
	
	
	
    // Initialize PhotoSwipe
    var lightBox = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
	lightBox.listen('gettingData', function (index, item) {
    if (item.w < 1 || item.h < 1) {
        var img = new Image();
        img.onload = function () {
            item.w = this.width;
            item.h = this.height;
            lightBox.updateSize(true);
        };
        img.src = item.src;
    }
});
	
	
    lightBox.init();
});

function get_items() {
		var items = [];
		var_start = {};
		$("#div_grid").each( function() {
			var temp = [];
			var $pic     = $(this)
			$pic.find('a').each(function() {
				var $href   = $(this).attr('href'),
							$size   = $(this).data('size').split('x'),
							$width  = $size[0],
							$height = $size[1],
							$title = $(this).data('title');
		 
				var temp = {
					src : $href,
					w   : $width,
					h   : $height,
					title : $title
						}
				
				temp.el = $(this).find("img")[0];
				items.push(temp)
			});

		});
		
		return(items)
	
	}


	
</script>

</body>
</html>