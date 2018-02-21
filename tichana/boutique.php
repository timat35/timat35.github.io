
<!--?php  include('title/title_sacs.php');?-->
<?php  include('header.php');?>



<div id="boutique" class ="container">

	<div class="row">
		<div id="boutiqueLeft" class="col-9">
			<div class="row">
				<p>
				Réza est une marque de maroquinerie proposant sacs et divers accessoires en cuir soulignés par des biais en tissu, gage de créations originales.La fabrication artisanale se fait dans un atelier situé sur le massif de Belledonne, en Isère.
				Les sacs, portefeuilles et autres accessoires sont des modèles uniques: un même gabarit décliné avec des cuirs, doublures et tissus de biais différents. Chacun peut ainsi choisir le modèle, le cuir et le tissu en fonction de ses goûts pour réaliser un article personnalisé !
				</p>
				<p>
				glouglbi glouba sont dans un vaisseau spatiale.. que c'est zouli!
				</p>
			</div>
			<div class="row justify-content-center">
				<img id="index_eska"  src="img/boutique/test.jpg" alt=""  />
			</div>
		</div>
		<div id="boutiqueRight" class="col-3">
			<div class="contact">
				<h1>Le court-circuit</h1>
				<p>
				7 rue du Lieutenant Chanaron</br>
				38000 Grenoble
				</p>
				<h3> Horaires </h3>
				<p>
				Du Mardi au Samedi</br>
				14h - 19h
				</p>
				<iframe class="googlemap" frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJSX3kCY_0ikcRvZVeJUpOuP0&key=AIzaSyBuYHDgFw2fCBk5oy4_d2052Hhqq7ZJ5Fs" allowfullscreen>
				</iframe>
				<h4> Qui est la? </h4>
				<div id="calendar"></div>
			</div>
		</div>
	</div>
</div>


</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/moment.js'></script>
<script type="text/javascript" src="js/main.js?v=1.5"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/jquery.event.move.js"></script>
<script type="text/javascript" src="js/jquery.event.swipe.js"></script>
<script type="text/javascript" src="js/photoswipe.js"></script>
<script type="text/javascript" src="js/photoswipe-ui-default.js"></script>
<script type="text/javascript" src='fullcalendar/fullcalendar.js'></script>
<script type='text/javascript' src='fullcalendar/gcal.js'></script>
<script type="text/javascript" src='fullcalendar/locale/fr.js'></script>

<script type="text/javascript">


$(document).ready(function() {
	
	w_w = $(window).width();
    if (w_w <1600){
       document.getElementById("boutiqueLeft").className= 'col-8';
		document.getElementById("boutiqueRight").className= 'col-4';
    }
	
	$(window).resize(function(){
		w_w = $(window).width();
		if (w_w  <1600){
			document.getElementById("boutiqueLeft").className = 'col-8';
			document.getElementById("boutiqueRight").className ='col-4';
		}
		else {
			document.getElementById("boutiqueLeft").className = 'col-9';
			document.getElementById("boutiqueRight").className ='col-3';
			
		}
    });

    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
        googleCalendarApiKey: "AIzaSyAaxUTleiUlolnnX3BLykCj16woRUDiAnQ",
        events: {
            googleCalendarId: "u2fcgjs9fjrtgq1iad1j1kb4g4@group.calendar.google.com"
        },
		defaultView: $(window).width() < 514 ? 'basicDay' : 'month',
		firstDay:2,
		hiddenDays: [ 0,1],
		aspectRatio:1.2,
		columnHeaderFormat:'dddd',
		header: {
			left:   'title',
			center: '',
			right:  'prev,next '
		},
		eventTextColor:'#000000',
		eventAfterRender: function (calEvent, element, view) {
			if (calEvent.title == "Le chant de l'émail") {
				element.css('background-color','#8dd3c7')
			} 
			else if (calEvent.title == "Eska") {
				element.css('background-color','#ffffb3')
			} 
			else if (calEvent.title == "Réza") {
				element.css('background-color','#bebada')
			} 
			else if (calEvent.title == "Têt-en-l'air") {
				element.css('background-color','#fb8072')
			} 
			element.css('border','0px')
			
		},
		windowResize: function(view) {
			if ($(window).width() < 514){
				$('#calendar').fullCalendar( 'changeView', 'basicDay' );
			} else {
				$('#calendar').fullCalendar( 'changeView', 'month' );
			}
		},
		eventClick: function(calEvent, jsEvent, view) {
		
			if (calEvent.title == "Le Chant de l'émail") {
				window.location = "creatrice.php?creatrice=chant"
			} 
			else if (calEvent.title == "Eska") {
				window.location = "creatrice.php?creatrice=eska"
			} 
			else if (calEvent.title == "Réza") {
				window.location = "creatrice.php?creatrice=reza"
			} 
			else if (calEvent.title == "Têt-en-l'air") {
				window.location = "creatrice.php?creatrice=tet"
			} 
			return false;
		}

		
    });
	
	


});

	
</script>


</body>
</html>


