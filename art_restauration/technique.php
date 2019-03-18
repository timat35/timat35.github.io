
<?php  include('title/title_creatrice.php');?>
<?php  include('header.php');?>




<div class ="container">
	<div class = "row">
		<div class = "col-8">
			<div class = "info-rect pad40">
				<p>« Le restaurateur doit limiter son action et ses interventions au strict nécessaire et ne pas faire de traitement avant qu’apparaisse le problème » article 8 de la charte de l’E.C.C.O qui définit les règles de déontologie que doit respecter le restaurateur.    
				</p>
				<p>
				J’interviens donc dans la conservation matérielle des biens culturels en respectant leur signification esthétique, historique et leur intégrité physique par des actes de : </br></br>
				-	Conservation préventive qui consiste à déterminer les actions indirectes à entreprendre sur l’œuvre afin d’en retarder la détérioration.
				            On doit prévenir les risques d’altérations en créant des conditions optimales de conservation</br> 
				-	Conservation curative qui regroupe les interventions  directes  sur l’œuvre dans le but de ralentir le processus de dégradation</br>  
				-	Restauration qui englobe toutes les opérations visant assurer la bonne lecture de l’œuvre et sa mise en valeur
				</p>
			</div>
			<div class="pad40 mt-4">
				<p>Toutes les actions de conservation et de restauration entreprises respectent aussi les 3 principes fondamentaux définis par la Charte de Venise (1964)  et adoptés par l’ I.C.O.M
				</p>
					<ul class="liste">
					<li><b>Réversibilité</b> qui oblige à utiliser des produits ou matériaux pouvant être retirés sans que l’objet ne soit affecté, et ce, afin de le ramener à son état antérieur.
					</li>
					<li><b>Compatibilité et stabilité</b> des produits et matériaux entre eux et avec les matériaux constitutifs de l’objet à restaurer.</br>
					Ces éléments ne doivent pas fragiliser les structures ni modifier la surface de l'objet.</br>
					Ils doivent être stables dans le temps. 
					</li>
					<li><b>Lisibilité</b> pour redonner une intégrité esthétique à l’œuvre en respectant ce qui a été conçu et voulu par l’artiste.
					</li>
				</ul>
			</div>
		</div>
		<div class = "col-3">
			<div class = "mt-3">
				<figure ind="0">
					<a href="img/technique/technique1.jpg" data-size="600x400" >
						<img src="img/technique/technique1.jpg" alt="tet-en-lair acceuil"/>
					</a>
				</figure>
				<p class= "text-center">Recherche de repeint aux rayons ultra-violet</p>
			</div>
			<div class = "mt-3">
				<figure ind="1">
					<a href="img/technique/technique2.jpg" data-size="600x400">
						<img src="img/technique/technique2.jpg" alt="tet-en-lair acceuil"/>
					</a>
				</figure>
				<p class= "text-center">Opérations de consolidation du support</p>
			</div>
		</div>
	</div>
	<div class = "row">
		<p class= "citation">« Tout tableau possède une fonction esthétique et historique.</br>Une retouche doit être posée de manière à ce qu’aucune de ces deux unités ne prédomine ni n’étouffe l’autre.»</br>Cesare Brandi</p>
	</div>
</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/main.js?v=1.5"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/photoswipe.js"></script>
<script type="text/javascript" src="js/photoswipe-ui-default.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">




	

$(document).ready(function() {
	
	$.ajaxSetup({ cache: false });
	
	w_w = $(window).width();
    if (w_w <798){
		document.getElementById("header").className = 'container-fluid';
		document.getElementById("nav_id").className = 'navbar navbar-expand-md ';
		document.getElementById("small-header").className = 'navbar-brand nav-center d-none';
    }
	else {
		document.getElementById("header").className = 'container-fluid d-none';
		document.getElementById("nav_id").className = 'navbar navbar-expand-md creatrice ';
		document.getElementById("small-header").className = 'navbar-brand nav-center ';
		
	}
	
	$(window).resize(function(){
		
		w_w = $(window).width();
		if (w_w <798){
			document.getElementById("header").className = 'container-fluid';
			document.getElementById("nav_id").className = 'navbar navbar-expand-md ';
			document.getElementById("small-header").className = 'navbar-brand nav-center d-none';
		}
		else {
			document.getElementById("header").className = 'container-fluid d-none';
			document.getElementById("nav_id").className = 'navbar navbar-expand-md creatrice ';
			document.getElementById("small-header").className = 'navbar-brand nav-center ';
			
		}
		  
	});
	
});

var pswpElement = document.querySelectorAll('.pswp')[0];


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

	
</script>


</body>
</html>


