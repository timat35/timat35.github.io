
<!--?php  include('title/title_sacs.php');?-->
<?php  include('header.php');?>



<div id="content" class ="container">

	<div class="col">
		<img id ="logo" src=""></img/>
	</div>
	<div class="col">
		<h2><a id="crea_title"></a></h2>
	</div>
	<div class="col">
		<a id="crea_sub"></a>
	</div>
	<div class="col">
		<a id="crea_link"></a>
	</div>
</div>

<div id = "div_grid" class="grid">
  <div id ="crea_grid" class="grid-sizer"></div>
	

	<div id = "btn_more" class="col down">
		<button class="link_more"> Plus de photos </button >
	</div>
</div>


<div class="container">
  <div id ="crea_text" class="col ">
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
                <!-- element will get class pswp__preloader--active when preloader is running -->
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

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/main.js?v=1.5"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/jquery.event.move.js"></script>
<script type="text/javascript" src="js/jquery.event.swipe.js"></script>
<script type="text/javascript" src="js/photoswipe.js"></script>
<script type="text/javascript" src="js/photoswipe-ui-default.js"></script>

<script type="text/javascript">

var name = <?php echo json_encode($_GET['creatrice'])?>;
var img_files = <?php echo json_encode(glob('img/'.$_GET['creatrice'].'/*.*'))?>;
load_content(name, img_files)

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
	

var pswpElement = document.querySelectorAll('.pswp')[0];



$(".link_more").click(function(){
	
	if (this.parentNode.classList.contains("down")) {

		this.innerHTML= "Moins de photos"
		this.parentNode.setAttribute("class", "col up")

		var new_img = load_more(name, img_files);
		var $new_img = $( new_img );
		$grid.append( $new_img ).masonry( 'appended', $new_img );

	}
	else {
		
		this.innerHTML= "Plus de photos"
		this.parentNode.setAttribute("class", "col down")

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

	
</script>


</body>
</html>


