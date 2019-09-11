
<?php  include('title/title_prestation.php');?>
<?php  include('header.php');?>


<div  class ="container">
	<div class="col-12 text-center">
		<h2 class = "page_title">Prestations</h2>
	</div>
	<div class = "row pad40">
		<div class = "col-8">
			<div class = "info-rect pad40">
				<p><b>Une peinture de chevalet est un objet complexe constitué de plusieurs strates qui présentent chacune une sensibilité particulière et seront traitées différemment.</b>
				</p>
				<p>
				La première intervention  consiste à dresser un <b>constat d’état</b> pour recenser l’ensemble des altérations et déterminer les interventions prioritaires à mener.
				</p>
				<p>
				<b>Le constat d’état est l’examen minutieux de l’œuvre et des matériaux qui la constituent.</b></br>Les composants (le support, la couche picturale et le vernis) sont soumis à un  vieillissement naturel qui conjugué à d’autres facteurs, comme les conditions environnementales, les accidents, les manipulations, accentuent et contribuent à sa dégradation.  
				</p>
				<p>
				Le restaurateur utilise différentes techniques pour réaliser l'examen attentif du support, des vernis, de la couche colorée et de la préparation. Cela lui permet d'en <b>diagnostiquer les altérations</b>, d’en mesurer l’importance et d’établir un <b>protocole de restauration</b> déontologiquement conforme et adapté à l’œuvre confiée.
				</p>
				<p>
				<b>Ces différentes étapes permettent d’établir un <u>devis précis et détaillé</u> des opérations de conservation et/ou  de restauration à envisager.</b>
				</p>
			</div>
			<div class="pad40 mt-4">
				<h4 class="page_title">SERVICES PROPOSÉS GRATUITS ET SANS ENGAGEMENT</h4>
				<ul class="liste">
				<li><b>DEVIS</b></li>
				<li><b>DÉPLACEMENT À DOMICILE</b></li>
				<li><b>CONSEILS EN CONSERVATION PRÉVENTIVE</b></li>
				</ul>
				<h4 class="page_title">DIFFÉRENTES ÉTAPES D’UNE RESTAURATION</h4>
				<ul class="liste">
				<li><b>DEVIS</b> établi à partir de l’examen approfondi de l’œuvre</li>
				<li><b>VALIDATION</b> du devis par le client</li>
				<li><b>RÉALISATION DE LA RESTAURATION</b> en suivant le protocole établi</li>
				<li><b>RESTITUTION</b> du bien confié en atelier ou à domicile</li>
				</ul>
			</div>
		</div>
		<div id="galery" class = "col-3 photoswipe">
			<div class = "mt-3 " style="text-align: center">
				<a href="img/prestation/prestation1_base.jpg" data-size="0x0" data-index="0"  alt="Stade ultime des altérations">
						<img src="img/prestation/prestation1.jpg" ind="0" alt="Stade ultime des altérations"/>
				</a>
				<p class= "text-center">Stade ultime des altérations d’adhésion et de cohésion; perte de matière; perte de lisibilité; sans intervention l’œuvre est en péril</p>
			</div>
			<div class = "mt-3 " style="text-align: center">
				<a href="img/prestation/prestation2_base.jpg" data-size="0x0" data-index="0" alt="Jaunissement du vernis">
						<img src="img/prestation/prestation2.jpg" ind="1" alt="Jaunissement du vernis"/>
				</a>
				<p class= "text-center">Jaunissement du vernis. L’allègement des vernis redonne de la luminosité et permet de retrouver les tonalités de la peinture originale</p>
			</div>
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


