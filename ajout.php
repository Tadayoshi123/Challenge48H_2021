<?php include("inc/header.inc.php"); 





if (isset($_POST['ajout'])) {
       $titre = htmlspecialchars($_POST['nom']);
       

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
      

       $requeteSQL = $pdo->prepare("INSERT INTO aliment (titre, img) VALUES (?, 'img/$name')");
       $requeteSQL->execute(array($titre));
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
                <select id="field-4" name="field-4"  >
                    <option value="">photo PassionFroid</option>
                    <option value="">Photo fournisseur</option>
                    <option value="">Logo</option>
                </select>
        </div>

        <div class="form-group">
                <h5 for="text">Photo avec produit</h5>
                <select id="field-4" name="field-4"  >
                    <option value="">oui</option>
                    <option value="">non</option>
                </select>
        </div>

        <div class="form-group">
                <h5 for="text">Photo avec humain</h5>
                <select id="field-4" name="field-4"  >
                    <option value="">oui</option>
                    <option value="">non</option>
                </select>
        </div>

        <div class="form-group">
                <h5 for="text">Photo institutionnelle</h5>
                <select id="field-4" name="field-4"  >
                    <option value="">oui</option>
                    <option value="">non</option>
                </select>
        </div>

        <div class="form-group">
                <h5 for="text">Format</h5>
                <select id="field-4" name="field-4"  >
                    <option value="">vertical</option>
                    <option value="">horizontale</option>
                </select>
        </div>

        <div class="form-group">
            <h5 for="text">Crédits photos</h5>
            <input type="text" class="form-control" name="rien" id="">
        </div>

        <div class="form-group">
                <h5 for="text">Droits d'utilisation limités</h5>
                <select id="field-4" name="field-4"  >
                    <option value="">oui</option>
                    <option value="">non</option>
                </select>
        </div>
       
        <div class="form-group">
            <h5 for="text">Tags</h5>
            <input type="text" class="form-control" name="rien" id="">
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