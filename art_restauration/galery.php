
<?php  include('title/title_prestation.php');?>
<?php  include('header.php');?>


<div  class ="container">
	<div class="col-12 text-center">
		<h2 class = "page_title">Galerie</h2>
	</div>
	<div class = "row">
		<div class = "image_comp">
			<img  src="img/galery/thumb/thumb-img1_base.jpg" alt="img1 base"  />
			<img  src="img/galery/thumb/thumb-img1_fix.jpg" alt="img1 restauré"  />
			<div>
				<p class= "image_comp_title">HUILE SUR TOILE 19éme</p>
				<p class= "image_comp_desc">Toile déclouée et déformée</br>
				Plusieurs lacunes complètes</br>
				Support toile affaibli</br>
				Vernis jauni et encrassé
				</p>
			</div>
		</div>

		<div class = "image_comp">
			<img  src="img/galery/thumb/thumb-img2_base.jpg" alt="img1 base"  />
			<img  src="img/galery/thumb/thumb-img2_fix.jpg" alt="img1 restauré"  />
			<div>
				<p class= "image_comp_title">HUILE SUR TOILE 19éme</p>
				<p class= "image_comp_desc">Toile déclouée et déformée</br>
				Plusieurs lacunes complètes</br>
				Support toile affaibli</br>
				Vernis jauni et encrassé
				</p>
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



</body>
</html>


