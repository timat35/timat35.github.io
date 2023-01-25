

<?php  include('title/title_index.php');?>
<?php  include('header.php');?>


<div class = "container index_main">


	<div class = "row justify-content-center">

		<div class=" col-auto mb-4 encart">
			<div class="row">
				<div  class="col-12 align-self-center text-left">
					<div>
						<h5>
							Ouverture de 10h à 13h et de 14h à 19h, du mardi au samedi.
						</h5>
					</div>
				</div>
			</div>
				<div  class="col-12">
					<div class="text-center">
						<h5 id="a_today"></h5>
					</div>
				</div>

		</div>

	</div>


	<div class = "row justify-content-center">

		<div class= "creaHolder col-6 col-md-15  separation" >
			<div class = "">
				<a href="creatrice.php?creatrice=chant">
				<div style="background-image: url(img/acceuil/c-index-chant-2.jpg);background-size: cover">
					<img  src="img/acceuil/c-index-chant-1.jpg" alt="chant de l'email acceuil" class="index_img" />
				</div>
					<img  src="img/acceuil/logo-chant.png" class="index-logo img-fluid" alt=""/>
				</a>
			</div>
			<div>
				
				<h3><a href="creatrice.php?creatrice=chant" class= "title">Le chant de l'émail</a></h3>
				<h6><a href="creatrice.php?creatrice=chant" class="desc">Céramiste</a></h6>
			</div>
		</div>
		<div class= "creaHolder col-6 col-md-15  separation">
			<div class = "">
				<a href="creatrice.php?creatrice=eska">
					
					<div style="background-image: url(img/acceuil/c-index-eska-2.jpg);background-size: cover">
						<img src="img/acceuil/c-index-eska-1.jpg" alt="eska acceuil"  class="index_img" />
					</div>
					<img  src="img/acceuil/logo-eska.png" class="index-logo" alt=""/>
				</a>
			</div>
			<div>
				<h3><a href="creatrice.php?creatrice=eska" class= "title">Eska</a></h3>
				<h6><a href="creatrice.php?creatrice=eska" class="desc">Vêtements</a></h6>
			</div>
		</div>
		<div class= "creaHolder col-6 col-md-15 separation">
			<div class = "">
				<a href="creatrice.php?creatrice=reza">
					
					<div style="background-image: url(img/acceuil/c-index-reza-2.jpg);background-size: cover;">
						<img src="img/acceuil/c-index-reza-1.jpg" alt="reza acceuil"  class="index_img" />
					</div>
					<img  src="img/acceuil/logo-reza.png" class="index-logo" alt=""/>
				</a>
			</div>
			<div>
				<h3><a href="creatrice.php?creatrice=reza" class= "title">Réza</a></h3>
				<h6><a href="creatrice.php?creatrice=reza" class="desc">Créations artisanales en cuir</a></h6>
			</div>
		</div>
		<div class= "creaHolder col-6 col-md-15 separation">
			<div class = "">
				<a href="creatrice.php?creatrice=tet">
					
					<div style="background-image: url(img/acceuil/c-index-tet-2.jpg);background-size: cover;">
						<img src="img/acceuil/c-index-tet-1.jpg" alt="tet-en-lair acceuil"  class="index_img" />
					</div>
					<img  src="img/acceuil/logo-tet.png" class="index-logo" alt=""/>
				</a>
			</div>
			<div>
				<h3><a href="creatrice.php?creatrice=tet" class= "title">Têt-en-l'air</a></h3>
				<h6><a href="creatrice.php?creatrice=tet" class="desc">Modiste chapeaux</a></h6>
			</div>
		</div>
		<div class= "creaHolder col-6 col-md-15 ">
			<div class = "">
				<a href="creatrice.php?creatrice=princesse">
					
					<div style="background-image: url(img/acceuil/c-index-prin-2.jpg);background-size: cover;">
						<img src="img/acceuil/c-index-prin-1.jpg" alt="tet-en-lair acceuil"  class="index_img" />
					</div>
					<img  src="img/acceuil/logo-princesse.png" class="index-logo" alt=""/>
				</a>
			</div>
			<div>
				<h3><a href="creatrice.php?creatrice=princesse" class= "title">Julia Belle</a></h3>
				<h6><a href="creatrice.php?creatrice=princesse" class="desc">linogravures, eaux-fortes, monotype et gravure à la pointe-sèche</a></h6>
			</div>
		</div>
	</div>
</div>


<?php  include('footer.php');?>





<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/main.js?v=16082022"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">

	get_today_info();
	
</script>


</body>
</html>


