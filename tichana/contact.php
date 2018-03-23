
<?php  include('title/title_contact.php');?>
<?php  include('header.php');?>



<div ="container">

	<div class="row mb-4 justify-content-center">
		<div class="col-12 col-lg-6  mt-4">
			<div class="row">
				<div  class="col-12">
					<div class="text-center">
						<h5 id="a_today"></h5></br></br>
					</div>
				</div>
			</div>
			<div class="row text-center justify-content-center">
				<div class="col-12 col-md-auto mb-3 mb-md-0">
					 <b>Téléphone fixe</b></br>
					 04 56 24 81 61
				</div>
				<div class="col-12 col-md-auto ">
					 <b>Horaire</b></br> 
					 du Mardi au Samedi de 14h à 19h.</br>
					 Plus d'information <a href="boutique.php" >ici</a>
				</div>
			</div>
		</div>
		
	</div>
	
	<div class="row justify-content-center">
		<div class="col-12 col-lg-6  border-bottom border-warning  mb-4"></div>
	</div>
	
	
	<div class="col-12 text-center">
	<h3>Les creatrices</h3>
	</div>
	
	<div class="row mb-4 justify-content-center">
		<div class="col-12  mt-4 mat-col-1450-6">
			<div class="row">
				<div  class="col-12 col-md-3 align-self-center">
					<div class="info text-center">
						<h5><a href="creatrice.php?creatrice=chant" >Le chant de l'émail</a></h5>
						<p>
						 oceane.doledec@gmail.com</br>
						06 30 84 01 96
						</p>
					</div>
				</div>
				<div  class="col-12 col-md-3 align-self-center">
					<div class="info text-center">
						<h5><a href="creatrice.php?creatrice=eska" >Eska</a></h5>
						<p>
						helene@eska-vetements.fr</br>
						06 86 07 13 88</br>
						</p>
					</div>
				</div>
				<div  class="col-12 col-md-3 align-self-center">
					<div class="info text-center">
						<h5><a href="creatrice.php?creatrice=reza" >Reza</a></h5>
						<p>
						reza.cuir@gmail.com</br>
						06 67 88 23 78</br>
						</p>
					</div>
				</div>
				<div  class="col-12 col-md-3 align-self-center">
					<div class="info text-center">
						<h5><a href="creatrice.php?creatrice=tet" >Têt-en-l'air</a></h5>
						<p>
						delphine@tetenlair.com</br>
						06 31 30 96 19</br>
						</p>
					</div>
				</div>
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

<script type="text/javascript">

	var crea = get_today_info();
	
	if (crea != undefined) {
		

		if (crea == "Le chant de l'émail") {
			var ref = "creatrice.php?creatrice=chant";
		} 
		else if (crea == "Eska") {
			var ref = "creatrice.php?creatrice=eska";
		} 
		else if (crea == "Réza") {
			var ref = "creatrice.php?creatrice=reza";
		} 
		else if (crea == "Têt-en-l'air") {
			var ref ="creatrice.php?creatrice=tet";
		}
		
		const temp_a = document.createElement("a");
		temp_a.setAttribute("href", ref);
		temp_a.innerHTML = crea;
		
		document.getElementById("a_today").innerHTML = "Aujourd'hui, "
		document.getElementById("a_today").append(temp_a)
		document.getElementById("a_today").append(" ouvre la chouette dorée de 14h à 19h.")
		
	}
	else {
		document.getElementById("a_today").innerHTML=  "Aujourd'hui, la chouette dorée est fermée.";
	}
	
	
	
</script>


</body>
</html>


