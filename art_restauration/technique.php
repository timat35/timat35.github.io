
<?php  include('title/title_technique.php');?>
<?php  include('header.php');?>


<div  class ="container">
	<div class="col-12 text-center">
		<h2 class = "page_title">Technique</h2>
	</div>
	<div class = "row pad40">
		<div class = "col-8">
			<div class = "info-rect ">
				<p>« <b>Le restaurateur doit limiter son action et ses interventions au strict nécessaire et ne pas faire de traitement avant qu’apparaisse le problème</b> » article 8 de la <b>charte de l’E.C.C.O</b> qui définit les règles de déontologie que doit respecter le restaurateur.    
				</p>
				<p>
				J’interviens donc dans la conservation matérielle des biens culturels en respectant leur signification esthétique, historique et leur intégrité physique par des actes de : </br></br>
				- <b>Conservation préventive</b> qui consiste à déterminer les actions indirectes à entreprendre sur l’œuvre afin d’en retarder la détérioration. On doit prévenir les risques d’altération en créant des conditions optimales de conservation</br> 
				- <b>Conservation curative</b> qui regroupe les interventions  directes  sur l’œuvre dans le but de ralentir le processus de dégradation</br>  
				- <b>Restauration</b> qui englobe toutes les opérations visant à assurer la bonne lecture de l’œuvre et sa mise en valeur
				</p>
			</div>
			<div class=" mt-4">
				<p>Toutes les actions de conservation et de restauration entreprises respectent aussi les 3 principes fondamentaux définis par la Charte de Venise (1964)  et adoptés par l’ I.C.O.M
				</p>
					<ul class="liste">
					<li><b>Réversibilité</b> qui oblige à utiliser des produits ou matériaux pouvant être retirés sans que l’œuvre ne soit affectée, et ce, afin de la ramener à son état antérieur.
					</li>
					<li><b>Compatibilité et stabilité</b> des produits et matériaux entre eux et avec les matériaux constitutifs de l’objet à restaurer.</br>
					Ces éléments ne doivent pas fragiliser les structures, ni modifier la surface de l'objet.</br>
					Ils doivent être stables dans le temps. 
					</li>
					<li><b>Lisibilité</b> pour redonner une intégrité esthétique à l’œuvre en respectant ce qui a été conçu et voulu par l’artiste.
					</li>
				</ul>
			</div>
			<div>
			<img src="img/ico/icoECCO.png" alt="tet-en-lair acceuil"/>
			<img src="img/ico/icoICOM.png" alt="tet-en-lair acceuil"/>
			</div>
		</div>
		<div id = "galery" class = "col-3 photoswipe">
			<div class = "mt-3" style="text-align: center">
				<a href="img/technique/technique1.jpg" data-size="0x0" data-index="0">
					<img src="img/technique/technique1.jpg" ind="0" alt="tet-en-lair acceuil"/>
				</a>
				<p class= "text-center">Recherche de repeints aux rayons ultra-violet</p>
			</div>
			<div class = "mt-3" style="text-align: center">
				<a href="img/technique/technique2.jpg" data-size="0x0" data-index="0">
					<img src="img/technique/technique2.jpg" ind="1" alt="tet-en-lair acceuil"/>
				</a>
				<p class= "text-center">Opérations de consolidation du support</p>
			</div>
		</div>
	</div>
	<div class = "mt-5 col-12">
		<p class= "citation">« Tout tableau possède une fonction esthétique et historique. Une retouche doit être posée de manière à ce qu’aucune de ces deux unités ne prédomine ni n’étouffe l’autre.»</br>Cesare Brandi</p>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/main.js?v=1.5"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/photoswipe.js"></script>
<script type="text/javascript" src="js/photoswipe-ui-default.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>


<script type="text/javascript">


var pswpElement = document.querySelectorAll('.pswp')[0];

$('#galery').on('click', 'img', function(event) {

    event.preventDefault();
    var items = get_items();
    console.log(items)
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


