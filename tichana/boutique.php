
<?php  include('title/title_boutique.php');?>
<?php  include('header.php');?>


<div id="boutique" class ="container">

	<div class="row">
		<div id="boutiqueLeft" class="col-12 col-lg-9">
			<div class="row-12">
				<p>
				Situé dans le quartier Championnet à Grenoble, La Chouette Dorée est une boutique partagée par 5 créatrices.</br>
				</p>
				<p>
				Retrouvez dans ce lieu le savoir faire local et l'univers de chacune : de la maroquinerie en cuir d'Elisa aux vêtements homme/femme d'Hélène, en passant par les chapeaux de Delphine, la céramique en grès d'Océane et les gravures de Julia.
				</p>
				<p>
				Vous trouverez dans <a class=link id="link_calendar" href="#">l'agenda</a> les jours de présence de chaque créatrice à la boutique !
				</p>
			</div>
			<div class="row-12">
				<img   src="img/boutique/boutique_chouette_doree_small.jpg" alt="boutique chouette doree" class="img-fluid" />
			</div>
		</div>
		<div id="boutiqueRight" class="col-12 col-lg-3">
			<div class="contact">
				<h1>La Chouette Dorée</h1>
				<p>
				7 rue du Lieutenant Chanaron</br>
				38000 Grenoble
				</p>
				<h3> Horaires</h3>
				<p>
				Du Mardi au Samedi, 10h-13h et 14h-19h.</br>
				</p>
				<iframe class="googlemap" frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJO5YiRbz1ikcRHLVm1UxN9kc&key=AIzaSyBuYHDgFw2fCBk5oy4_d2052Hhqq7ZJ5Fs" allowfullscreen>
				</iframe>
				<h4> Qui est la? </h4>
				<div id="calendar"></div>
			</div>
		</div>
	</div>
</div>

<?php  include('footer.php');?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/moment.js'></script>
<script type="text/javascript" src="js/main.js?v=1.5"></script>
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

	$("#link_calendar").click(function() {
		$('html,body').animate({scrollTop:  $("#calendar").offset().top},'slow');
	});
	
	

    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
        googleCalendarApiKey: "AIzaSyAaxUTleiUlolnnX3BLykCj16woRUDiAnQ",
        events: {
            googleCalendarId: "u2fcgjs9fjrtgq1iad1j1kb4g4@group.calendar.google.com"
        },
		defaultView: 'month',
		firstDay:2,
		hiddenDays: [1],
		aspectRatio:'a',
		columnHeaderFormat: $(window).width() < 1225 ? 'ddd': 'dddd',
		header: {
			left:   'title',
			center: '',
			right:  'prev,next '
		},
		eventTextColor:'#000000',
		eventAfterRender: function (calEvent, element, view) {

			if (similarity(calEvent.title,"Le chant de l'émail") > 0.30) {
				element.css('background-color','#8dd3c7')
			} 
			else if (similarity(calEvent.title,"Eska") > 0.30) {
				element.css('background-color','#ffffb3')
			} 
			else if (similarity(calEvent.title,"Réza") > 0.30) {
				element.css('background-color','#bebada')
			} 
			else if (similarity(calEvent.title,"Têt-en-l'air") > 0.30) {
				element.css('background-color','#fb8072')
			} 
			else if (similarity(calEvent.title,"Julia Belle") > 0.30) {
				element.css('background-color','#78BCEB')
			} 
			else {
				element.css('background-color','#EFEFEF')
			}
			element.css('border','0px')
			
		},
		eventClick: function(calEvent, jsEvent, view) {
		
			if (similarity(calEvent.title,"Le chant de l'émail") > 0.30) {
				window.location = "creatrice.php?creatrice=chant"
			} 
			else if (similarity(calEvent.title,"Eska") > 0.30) {
				window.location = "creatrice.php?creatrice=eska"
			} 
			else if (similarity(calEvent.title,"Réza") > 0.30) {
				window.location = "creatrice.php?creatrice=reza"
			} 
			else if (similarity(calEvent.title,"Têt-en-l'air") > 0.30) {
				window.location = "creatrice.php?creatrice=tet"
			} 
			else if (similarity(calEvent.title,"Julia Belle") > 0.30) {
				window.location = "creatrice.php?creatrice=princesse"
			} 

			return false;
		}
	
	
		
    });

});

	
</script>


</body>
</html>


