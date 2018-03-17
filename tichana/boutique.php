
<!--?php  include('title/title_sacs.php');?-->
<?php  include('header.php');?>



<div id="boutique" class ="container">

	<div class="row">
		<div id="boutiqueLeft" class="col-12 col-lg-9">
			<div class="row-12 mx-3">
				<p>
				Tu sais, remarqua Arthur, c'est en de tels moments, quand je me retrouve coincé dans un sas vogon en compagnie d'un natif de Bélelgeuse, au seuil d'une mort imminente par asphyxie dans les profondeurs de l'espace, que je regrette de ne pas avoir écouté ce que me disait ma mère quand j'étais petit.
				</br>
				– Eh bien, que te disait-elle ?</br>
				– Je sais pas. J'ai pas écouté.
				</p>
				<p>
				Deux secondes plus tard, il apercevait dans son rétro le reflet de l’auto-stoppeur, trempé, sur le bas-côté. Durant une minute, il se sentit tout content. La minute suivante, il culpabilisa d’avoir été content de ce qu’il avait fait. Puis il fut content d’avoir culpabilisé d’avoir été content de ce qu’il avait fait et, satisfait, poursuivit sa route dans la nuit.
				</p>
			</div>
			<div class="row-12">
				<img   src="img/boutique/boutique_chouette_doree_small.jpg" alt="boutique chouette doree" class="img-fluid" />
			</div>
		</div>
		<div id="boutiqueRight" class="col-12 col-lg-3">
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
<script type="text/javascript" src='fullcalendar/fullcalendar.js'></script>
<script type='text/javascript' src='fullcalendar/gcal.js'></script>
<script type="text/javascript" src='fullcalendar/locale/fr.js'></script>

<script type="text/javascript">


$(document).ready(function() {
	
	w_w = $(window).width();
    if (w_w <1600){
       document.getElementById("boutiqueLeft").className= 'col-12 col-lg-8';
		document.getElementById("boutiqueRight").className= 'col-12 col-lg-4';
    }
	
	$(window).resize(function(){
		w_w = $(window).width();
		if (w_w  <1600){
			document.getElementById("boutiqueLeft").className = 'col-12 col-lg-8';
			document.getElementById("boutiqueRight").className ='col-12 col-lg-4';
		}
		else {
			document.getElementById("boutiqueLeft").className = 'col-12 col-lg-9';
			document.getElementById("boutiqueRight").className ='col-12 col-lg-3';
			
		}
    });

    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
        googleCalendarApiKey: "AIzaSyAaxUTleiUlolnnX3BLykCj16woRUDiAnQ",
        events: {
            googleCalendarId: "u2fcgjs9fjrtgq1iad1j1kb4g4@group.calendar.google.com"
        },
		defaultView: 'month',
		firstDay:2,
		hiddenDays: [ 0,1],
		aspectRatio:'a',
		columnHeaderFormat: $(window).width() < 1225 ? 'ddd': 'dddd',
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


