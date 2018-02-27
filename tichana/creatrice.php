
<?php  include('header.php');?>



<div id="content" class ="container">

	<div class="col">
		<img id ="logo" src=""></img>
	</div>
	<div class="col">
		<h2><a id="crea_title"></a></h2>
	</div>
	<div class="col">
		<h5><a id="crea_sub"></a></h5>
	</div>
	<div class="col">
		<a href="" target="_blank" id="crea_link">
		</a>
		<a target="_blank" id="crea_face" class="d_off">
			<img src="img/ico/icoFace.jpg" alt="IcoFace"  class="link_logo" />
		</a>
	</div>
</div>

<div class="masonry_container">
	<div id = "div_grid" class="grid">
	  <div id ="crea_grid" class="grid-sizer"></div>
		

		<div id = "btn_more" class="col down d-none d-md-block">
			<button class="link_more"> Plus de photos </button >
		</div>
	</div>
</div>

<div class="container">
  <div id ="crea_text" class="col">
  </div>
</div>

	<div class="row justify-content-center">
		<div class="col-12 col-lg-6  border-bottom border-dark   mb-4"/>
	</div>

<div class = "row justify-content-md-center">

	<div class= "col-12 mb-4 text-center">
		<h3><a class= "title"> Les autres creatrices</a></h3>
	</div>
			
	<div  data-crea="chant" class= "creaHolder col-6 col-md-3 text-center" >
		<div class = "creaImage">
			<a href="creatrice.php?creatrice=chant">
				<img  src="img/acceuil/logo-chant.png"  class="index-logo-small" alt=""/>
				<img id="index_chant"  src="img/acceuil/index-chant-1.jpg" alt=""  onclick="" class="index_img"  onmouseover="index_hover(this, 2);" onmouseout="index_hover(this, 1);"/>

			</a>
		</div>
		<div>
			<h3><a href="creatrice.php?creatrice=chant" class= "title">Le chant de l'émail</a></h3>
		</div>
	</div>
	<div data-crea="eska" class= "creaHolder col-6 col-md-3  text-center">
		<div class = "creaImage">
			<a href="creatrice.php?creatrice=eska">
				
				<img  src="img/acceuil/logo-eska.png"  class="index-logo-small" alt=""/>
				<img id="index_eska"  src="img/acceuil/index-eska-1.jpg" alt=""  onclick="" class="index_img"  onmouseover="index_hover(this, 2);" onmouseout="index_hover(this, 1);"/>

			</a>
		</div>
		<div>
			<h3><a href="creatrice.php?creatrice=eska" class= "title">Eska</a></h3>
		</div>
	</div>
	<div data-crea="reza" class= "creaHolder col-6 col-md-3 text-center ">
		<div class = "creaImage">
			<a href="creatrice.php?creatrice=reza">
				
				<img  src="img/acceuil/logo-reza.png"  class="index-logo-small" alt=""/>
				<img id="index_reza"  src="img/acceuil/index-reza-1.jpg" alt=""  onclick="" class="index_img"  onmouseover="index_hover(this, 2);" onmouseout="index_hover(this, 1);"/>

			</a>
		</div>
		<div>
			<h3><a href="creatrice.php?creatrice=reza" class= "title">Réza</a></h3>
		</div>
	</div>
	<div data-crea="tet" class= "creaHolder col-6 col-md-3 text-center mx-auto mx-md-0">
		<div class = "creaImage">
			<a href="creatrice.php?creatrice=tet">
				
				<img  src="img/acceuil/logo-tet.png" class="index-logo-small" alt=""/>
				<img id="index_tet"  src="img/acceuil/index-tet-1.jpg" alt=""  onclick="" class="index_img"  onmouseover="index_hover(this, 2);" onmouseout="index_hover(this, 1);"/>
				
			</a>
		</div>
		<div>
			<h3><a href="creatrice.php?creatrice=tet" class= "title">Têt-en-l'air</a></h3>
		</div>
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

</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/main.js?v=1.5"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/jquery.event.move.js"></script>
<script type="text/javascript" src="js/jquery.event.swipe.js"></script>
<script type="text/javascript" src="js/photoswipe.js"></script>
<script type="text/javascript" src="js/photoswipe-ui-default.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

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
	

$(document).ready(function() {
	
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


	
</script>


</body>
</html>


