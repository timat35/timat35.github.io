
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
Par email à l’adresse <a href="mailto:art.restauration.lyon@gmail.com" style="text-decoration: underline; color: -webkit-link;">art.restauration.lyon@gmail.com</a></br>
Par téléphone au 06 21 49 82 51<br/>
Sur rendez-vous, nous pouvons aussi nous retrouver à l’atelier galerie <a target="_blank" href="http://www.autourdelimage.fr/"> Autour de l'image</a>, 44 rue Sala Lyon 2ème. 
</p>
</section>

</div>

</div>
</div>
</div>

<form method="post" enctype="multipart/form-data">
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
        <input type="hidden" name="MAX_FILE_SIZE" value="8000000">
        <input type="file" id="avatar" name="fichier_joint" accept="image/*">
    </div>
    <div>
        <input type="submit">
    </div>

    </form>
    <?php
    if(isset($_POST['message']))
    {   

        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis le site Art Restauration.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        
        if(isset($_FILES['fichier_joint']))
        {   

            $taille_maxi = 8000000;
            //Taille du fichier
            $taille = filesize($_FILES['avatar']['tmp_name']);
            if($taille>$taille_maxi)
            {
                 $erreur = 'La taille du fichier est trop élevé (>7.5 mega)';
            }

            $dossier = 'upload/';
            $fichier = basename($_FILES['fichier_joint']['name']);
            $fichier = strtr($fichier,
             'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
             'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'); 
            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            if(move_uploaded_file($_FILES['fichier_joint']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {
                echo 'Upload effectué avec succès !';
            }
            else //Sinon (la fonction renvoie FALSE).
            {
                echo 'Echec de l\'upload !';
            }
            $entete = 'Content-Type: multipart/mixed;'."\r\n".' boundary="'.$boundary.'"';
            $message = 'This is a multi-part message in MIME format.'."\r\n";
            $message .= '--'.$boundary."\r\n";
            $message .= 'Content-Type: text/html; charset="UTF-8"'."\r\n";
            $message .= "\r\n";
            $message .= '<h1>Message envoyé depuis le site Art Restauration.fr</h1>
            <p><b>Nom : </b>' . $_POST['nom'] . '<br>
            <b>Email : </b>' . $_POST['email'] . '<br>
            <b>Message : </b>' . $_POST['message'] . '</p>';
            $message .= "\r\n";
            $message .= '--'.$boundary."\r\n";
            $message .= 'Content-Type: application/pdf; name="'.$fichier.'"'."\r\n";
            $message .= 'Content-Transfer-Encoding: base64'."\r\n";
            $message .= 'Content-Disposition: attachment; filename="'.$fichier.'"'."\r\n";
            $message .= "\r\n";
            $source = file_get_contents($dossier .'/'. $fichier);
            $source = base64_encode ($source);
            $source = chunk_split($source);
            $message .= $source;
        }

        $retour = mail('timat35@gmail.com', 'Contact Art Restauration', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé. Merci.</p>';
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