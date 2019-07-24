
<?php  include('title/title_contact.php');?>
<?php  include('header.php');?>

<div class="col-12 text-center">
	<h2 class = "page_title">Contact</h2>
</div>

<div class="slide_shadow">
</div>

<div id="content">
<div class= "matPage matContact">

<div class="matContainer matWide matContact ">
<div>
<section>
<p>
Christine Laversanne<br />
9 avenue Jean Jaures, 69007 Lyon<br />
</section>
<section  class="textContact">
Pour tous renseignements, constat d’état, devis, n’hésitez pas à me contacter :<br/>
Par email à l’adresse <a href="mailto:art-restauration@gmail.com" style="text-decoration: underline; color: -webkit-link;">art-restauration@gmail.com</a></br>
Par téléphone au 06 21 49 82 51<br/>
Sur rendez-vous, nous pouvons aussi nous retrouver à l’atelier galerie <a target="_blank" href="http://www.autourdelimage.fr/"> Autour de l'image</a>, 44 rue Sala Lyon 2ème. 
</p>
</section>

</div>

</div>
</div>
</div>

<form method="post">
        <label>Nom</label>
        <input type="text" name="nom" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Message</label>
        <textarea name="message" required></textarea>
        <input type="submit">
    </form>
    <?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('christinelaversanne@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>

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