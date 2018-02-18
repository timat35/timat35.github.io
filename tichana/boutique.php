
<!--?php  include('title/title_sacs.php');?-->
<?php  include('header.php');?>



<div id="boutique" class ="container">

	<div class="row">
		<div class="col ">
			<img id="index_reza"  src="img/boutique/background.png" />
		</div>
		<div class="col ">
			<p>
			Réza est une marque de maroquinerie proposant sacs et divers accessoires en cuir soulignés par des biais en tissu, gage de créations originales.La fabrication artisanale se fait dans un atelier situé sur le massif de Belledonne, en Isère.
			Les sacs, portefeuilles et autres accessoires sont des modèles uniques: un même gabarit décliné avec des cuirs, doublures et tissus de biais différents. Chacun peut ainsi choisir le modèle, le cuir et le tissu en fonction de ses goûts pour réaliser un article personnalisé !
			</p>
			<p>
			Réza est une marque de maroquinerie proposant sacs et divers accessoires en cuir soulignés par des biais en tissu, gage de créations originales.La fabrication artisanale se fait dans un atelier situé sur le massif de Belledonne, en Isère.
			Les sacs, portefeuilles et autres accessoires sont des modèles uniques: un même gabarit décliné avec des cuirs, doublures et tissus de biais différents. Chacun peut ainsi choisir le modèle, le cuir et le tissu en fonction de ses goûts pour réaliser un article personnalisé !
			</p>
			<p>
			Réza est une marque de maroquinerie proposant sacs et divers accessoires en cuir soulignés par des biais en tissu, gage de créations originales.La fabrication artisanale se fait dans un atelier situé sur le massif de Belledonne, en Isère.
			Les sacs, portefeuilles et autres accessoires sont des modèles uniques: un même gabarit décliné avec des cuirs, doublures et tissus de biais différents. Chacun peut ainsi choisir le modèle, le cuir et le tissu en fonction de ses goûts pour réaliser un article personnalisé !
			</p>
		</div>
		<div class="col">
			<iframe width="400" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://cartosm.eu/map?lon=5.7233639893763&lat=45.186836007727&zoom=18&width=400&height=350&mark=true&nav=true&pan=true&zb=inout&style=default&icon=left"></iframe>
			<div id="calendar"></div>

		</div>
	</div>
</div>


</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
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

    // page is now ready, initialize the calendar...

$(document).ready(function() {
    $('#calendar').fullCalendar({
        googleCalendarApiKey: "AIzaSyAaxUTleiUlolnnX3BLykCj16woRUDiAnQ",
        events: {
            googleCalendarId: "u2fcgjs9fjrtgq1iad1j1kb4g4@group.calendar.google.com"
        },
		defaultView: $(window).width() < 514 ? 'basicDay' : 'month',
		firstDay:2,
		hiddenDays: [ 0,1],
		aspectRatio:1.5,
		columnHeaderFormat:'dddd',
		header: {
			left:   'prev,next ',
			center: 'title',
			right:  ''
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

});

	
</script>


</body>
</html>


