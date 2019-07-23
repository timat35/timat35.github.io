

<?php  include('title/title_index.php');?>
<?php  include('header.php');?>


<div class = "container ">
	<div class="d-flex justify-content-center">
		<div class = "row index_main">
			<div class= "creaHolder col-6 col-md-3  separation" >
				<div class = "">
					<a href="technique.php">
						<img  src="img/acceuil/index-technique.jpg" alt="chant de l'email acceuil"  />
					</a>
				</div>
				<div>
					<h3><a href="technique.php" class= "title">Technique</a></h3>
				</div>
			</div>
			<div class= "creaHolder col-6 col-md-3  separation">
				<div class = "">
					<a href="prestation.php">
						<img src="img/acceuil/index-prestation.jpg" alt="eska acceuil"   />
					</a>
				</div>
				<div>
					<h3><a href="prestation.php" class= "title">Prestations</a></h3>
				</div>
			</div>
			<div class= "creaHolder col-6 col-md-3">
				<div class = "">
					<a href="galery.php">
						<img src="img/acceuil/index-galerie.jpg" alt="reza acceuil"  />
					</a>
				</div>
				<div>
					<h3><a href="galery.php" class= "title">Galerie</a></h3>
				</div>
			</div>
			<div class= "creaHolder col-6 col-md-3 ">
				<div class = "">
					<a href="contact.php">
						<img src="img/acceuil/index-contact-devis.jpg" alt="tet-en-lair acceuil"   />
					</a>
				</div>
				<div>
					<h3><a href="contact.php" class= "title">Contact-Devis</a></h3>
				</div>
			</div>
		</div>
	</div>

	<div class="d-flex justify-content-center">
		<div class = "row pad40 mt-3">
			<div class = "col-6 mat-col-1450-6">
				<ul class="liste">
					<li><b>PRENDRE SOIN</b> sans altérer ou modifier ce qui a été conçu ou voulu par l’artiste</li>
					<li><b>RESPECTER</b> les règles de déontologie propre au restaurateur conservateur</li>
					<li><b>EFFECTUER</b> un examen technologique minutieux des constituants de l’œuvre</li>
					<li><b>ÉTABLIR</b> un diagnostic précis à partir de l’analyse globale des pathologies du tableau</li>
					<li><b>PROPOSER</b> un protocole de traitement respectant l’intégrité historique et esthétique de  l’œuvre</li>
					<li><b>ÉDITER</b> un devis détaillé et argumenté comprenant une documentation photographique </li>
					<li><b>UTILISER</b> des matériaux stables, réversibles et reconnus par la profession</li>
					<li><b>RÉALISER</b> des opérations de restauration et de conservation minimalistes et justifiées</li>
				</ul>
			</div>
			<div class="col-6 mat-col-1450-6 div_index_img">
				<div id = "galery" class="row photoswipe">
					<a href="img/acceuil/index-restauration1_base.jpg" data-size="0x0" data-index="0" class= "col-6 row_padlr img_max">
						<img src="img/acceuil/index-restauration1.jpg" alt="tet-en-lair acceuil" ind="0" />
					</a>
					<a href="img/acceuil/index-restauration2.jpg" data-size="0x0" data-index="0" class= "col-6 row_padlr img_max">
						<img src="img/acceuil/index-restauration2.jpg" alt="tet-en-lair acceuil" ind="1" />
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="d-flex justify-content-center">
		<div class = "info-rect pad40">
			<h4>Parcours</h4>
				<p>4 ans de formation de «  Conservateur restaurateur d’œuvres et d’objets polychromes » à l’atelier de la Renaissance à Lyon. L’atelier dispense une formation aux techniques de conservation et de restauration de tableaux et d’objets peints en appliquant les règles de déontologie éditées par   l’E.C.C.O (Confédération  Européenne des Organisations de Conservateurs Restaurateurs). Les cours théoriques comme le travail d’atelier s’appuient sur l’expérience (30 ans) et le savoir-faire des formateurs. Des cours d’histoire de l’art et de copie complètent l’enseignement pour  permettre de mieux comprendre et appréhender les œuvres en fonction de la technique utilisée et de l’époque de création.
				</p>
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
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/main.js?v=1.63"></script>
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


