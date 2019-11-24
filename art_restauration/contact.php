
<?php  include('title/title_contact.php');?>
<?php  include('header.php');?>

<div class="col-12 text-center">
	<h2 class = "page_title">Contact</h2>
</div>

<div id="content">
    <p>
    Christine Laversanne<br />
    9 avenue Jean Jaures, 69007 Lyon<br />
    </p>
    <section  class="textContact">
    <p>
    Pour tous renseignements, constat d’état, devis, n’hésitez pas à me contacter :<br/>
    Par le formulaire de contact, ci-dessous<br/>
    Par email à l’adresse <a href="mailto:artrestauration.lyon@gmail.com" style="text-decoration: underline; color: -webkit-link;">artrestauration.lyon@gmail.com</a></br>
    Par téléphone au 06 21 49 82 51<br/>
    Sur rendez-vous, nous pouvons aussi nous retrouver à l’atelier galerie <a target="_blank" href="http://www.autourdelimage.fr/"> Autour de l'image</a>, 44 rue Sala Lyon 2ème. 
    </p>
    </section>
</div>

<form action="postmail.php" method="post" enctype="multipart/form-data">
    <div>
        <label>Nom</label>
        <input type="text" name="nom" required>
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label>Message</label>
        <textarea name="message" required></textarea>
    </div>
    <div>
        <label for='fichier'>Ajouter une pièce jointe <span>(jpg, jpeg ou png, max 8Mo)</span></label>
        <input type="file" name="fichier" id="fichier">    
    </div>
    <div>
        <input type="submit" value="Envoyer">
    </div>

</form>

<?php  include('footer.php');?>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/main.js?v=1.5"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/photoswipe.js"></script>
<script type="text/javascript" src="js/photoswipe-ui-default.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>