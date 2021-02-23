<?php include("inc/header.inc.php"); 

if (isset($_POST['ajout'])) {

       $titre = htmlspecialchars($_POST['nom']);
       $type = htmlspecialchars($_POST['type']);
       $p_produit = htmlspecialchars($_POST['p_produit']);
       $p_humain = htmlspecialchars($_POST['p_humain']);
       $p_instit = htmlspecialchars($_POST['p_instit']);
       $format = htmlspecialchars($_POST['format']);
       $credits = htmlspecialchars($_POST['credits']);
       $copyright = htmlspecialchars($_POST['copyright']);
       $tags = htmlspecialchars($_POST['tags']);
       if (isset($_POST['droits'])) {
        $droits = htmlspecialchars($_POST['droits']);
      } else {
        $droits = "non";
        $copyright = NULL;
      }
       

        $name = "";
       if (!empty($_FILES)) {
         foreach ($_FILES["img"]["error"] as $key => $error) {
           if ($error == UPLOAD_ERR_OK) {
               $tmp_name = $_FILES["img"]["tmp_name"][$key];
               $name = basename($_FILES["img"]["name"][$key]);
               move_uploaded_file($tmp_name, "img/$name");
           }
         }
       }
      

       $requeteSQL = $pdo->prepare("INSERT INTO aliment (titre, img, type, p_produit, p_humain, p_instit, format, credits, droits, copyright, tags) VALUES (?, 'img/$name', ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       $requeteSQL->execute(array($titre, $type, $p_produit, $p_humain, $p_instit, $format, $credits, $droits,$copyright, $tags));
       echo "une annonce a été mise en ligne ";
       
    }

    ?>


<h1 style="text-align: center">Ajouter une photo</h1>
<section class="contact-form">

        
        <form class="form-group" action="" method="post" name="ajouts" enctype='multipart/form-data'>

        <div class="form-group">
            <h5 for="text">Nom</h5>
            <input type="text" class="form-control" name="nom" id="">
        </div>

        

        <div class="form-group">
                <h5 for="text">Type d'image</h5>
                <select id="field-4" name="type"  >
                    <option value="photo Passion Froid">Photo PassionFroid</option>
                    <option value="Photo fournisseur">Photo fournisseur</option>
                    <option value="Logo">Logo</option>
                </select>
        </div>

        <div class="form-group">
                <h5 for="text">Photo avec produit</h5>
                <select id="field-4" name="p_produit"  >
                    <option value="oui">oui</option>
                    <option value="non">non</option>
                </select>
        </div>

        <div class="form-group">
                <h5 for="text">Photo avec humain</h5>
                <select id="field-4" name="p_humain"  >
                    <option value="oui">oui</option>
                    <option value="non">non</option>
                </select>
        </div>

        <div class="form-group">
                <h5 for="text">Photo institutionnelle</h5>
                <select id="field-4" name="p_instit"  >
                    <option value="oui">oui</option>
                    <option value="non">non</option>
                </select>
        </div>

        <div class="form-group">
                <h5 for="text">Format</h5>
                <select id="field-4" name="format"  >
                    <option value="vertical">vertical</option>
                    <option value="horizontal">horizontal</option>
                </select>
        </div>

        <div class="form-group">
            <h5 for="text">Crédits photos</h5>
            <input type="text" class="form-control" name="credits" id="">
        </div> </br>
        <div>
        <label for="requirement">Droits d'utilisations ?</label>
			<input type="checkbox" name="droits" value="oui" id="requirement" class="control">
				<div class="conditional">
				<input type="text" id="option" placeholder="Copyright" name="copyright">
        </div>

        <div class="form-group">
            <h5 for="text">Tags</h5>
            <input type="text" class="form-control" name="tags" id="">
        </div>

        <div class="form-group">
            <h5 for="titre">Photo</h5>
            <input type="file" class="form-control-file" id="img" name="img[]">
        </div>
        
        <input type="submit" value="Ajouter" name="ajout">
        <?php if (! empty($message)) { ?>
                    <p><?php echo $message; ?></p>
                <?php } ?>
        </form>
    
       
</section>

<?php include("inc/footer.inc.php"); ?>