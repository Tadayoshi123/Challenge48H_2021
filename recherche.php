<?php include("inc/header.inc.php"); ?>



<h1 style="text-align: center">Rechercher</h1>
<section class="contact-form">

        
        <form class="form-group" action="" method="post" name="recherches" enctype='multipart/form-data'>

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
            <h5 for="text">Tags</h5>
            <input type="text" class="form-control" name="rien" id="">
        </div>

        
        <input type="submit" value="Rechercher" name="recherche">
        
        <?php if (! empty($message)) { ?>
                    <p><?php echo $message; ?></p>
                <?php } ?>
        </form>
    
       
</section>

<?php include("inc/footer.inc.php"); ?>