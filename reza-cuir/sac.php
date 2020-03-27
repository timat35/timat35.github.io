
<?php  include('title/title_sacs.php');?>
<?php  include('header.php');?>


<div class="slide_shadow">
</div>




<div class = "container">
	<div class="justify-content-center">
		<div id="article_list" class = "row ">
		<!-- load in js -->
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
<script type="text/javascript" src="/js/jquery.event.move.js"></script>
<script type="text/javascript" src="/js/jquery.event.swipe.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/photoswipe.js"></script>
<script type="text/javascript" src="js/photoswipe-ui-default.js"></script>
<script type="text/javascript" src="/js/reza.js?v=1"></script>


<script type="text/javascript">

	load_article('sac');

	var pswpElement = document.querySelectorAll('.pswp')[0];

	$('#article_list').on('click', 'img', function(event) {

		if ($(this).attr('galery') !== undefined)
		{
		    event.preventDefault();
		    var galery = $(this).attr('galery');
		    var items = get_items(galery);
		    var $index = Number($(this).attr('ind'))
		    var rect = {
		    	x:$(this).context.x,
		    	y:$(this).context.y,
		    	w:$(this).context.offsetWidth
		    }

		    var options = {
		        index: $index,
		        showHideOpacity:true,
		        getThumbBoundsFn : function(index) {
		            var pageYScroll = window.pageYOffset || document.documentElement.scrollTop;
		            return {x: rect.x, y: rect.y + pageYScroll, w: rect.w};
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
		}
	});


	function get_items(galery) {
		var items = [];
		var_start = {};
		$("#"+galery).each( function() {
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



