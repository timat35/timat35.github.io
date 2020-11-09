
<?php  include('title/title_boutique.php');?>
<?php  include('header.php');?>


<div id="boutique" class ="container">


	<div class="row">


		<div id="boutiqueLeft" class="col-12 col-lg-9">


			<div class="col-12 col-md-auto encart">
				<div class="row">
				
					<div  class="col-6  text-right  ">
						<img   src="img/conf_chouette.jpg"  alt="" class="img-fluid" />
					</div>

					<div  class="col-6 align-self-center text-left">
						<div>
						<p>
							<h5>Surprise on est fermé ! </h5>
							Alors on imagine une nouvelle formule. Nous vous proposons des commandes avec <strong> retrait à la boutique.</strong></br>
							Pour cela, il vous suffit de faire un tour sur les sites de chacune:</br>
							<a href="https://www.facebook.com/lechantdelemail/" target="_blank">Le chant de l'émail</a> /
							<a href="https://www.eska-vetements.fr/" target="_blank">Eska</a> /
							<a href="http://www.reza-cuir.com/" target="_blank">Réza</a> /
							<a href="creatrice.php?creatrice=tet" target="_blank">Têt-en-l'air</a> /
							<a href="https://www.julia-belle.com/" target="_blank">Julia Belle</a>. </br>
							Nous contacter en nous précisant les articles de votre choix et</br>
							venir les récupérer <strong>le mardi de 16h à 19h et le samedi de 10h à 13h.</strong></br>
						</p>
						<p class="d-none d-md-block">
						Si vous n'arrivez pas à choisir, la chouette dorée vous propose des cartes cadeaux a récupérer sur place!

						<div  class="col-12 py-2 px-0 d-none d-md-block ">
							<img  class="w-50" src="img/bon_cadeau.jpg"  alt="" class="img-fluid" />
						</div>

						</p>
						</div>
					</div>
				</div>

				<div class="row mt-4 d-md-none">
			
				<div  class="col-6  text-right  ">
					<img   src="img/bon_cadeau.jpg"  alt="" class="img-fluid" />
				</div>

				<div  class="col-6 align-self-center text-left">
					<div>
						<p>
							Si vous n'arrivez pas à choisir, la chouette dorée vous propose des cartes cadeaux a récupérer sur place!
						</p>
						
					</div>
				</div>
			</div>

			</div>

			<div class="row justify-content-center">
				<div class="col-12 col-lg-9  border-bottom border-dark  mb-4"></div>
			</div>

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
				Le mardi de 16h à 19h et le samedi de 10h à 13h.</br>
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


