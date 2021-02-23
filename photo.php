<?php include("inc/header.inc.php");?>

<?php if (!empty($_GET)) { ?>

<?php

$requeteSQL = $pdo->prepare("SELECT * FROM aliment WHERE id_aliment = $_GET[id]");
$requeteSQL->execute();     
$annonce = $requeteSQL->fetch();



?>   


<div class='container-fluid' >
    <div class="card mx-auto col-md-3 col-10 mt-5"> <img class='imgzoom' src="<?php echo $annonce['img']; ?>" width="500" height="500" />
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <h3 class="card-title font-weight-bold">Titre : <?php echo $annonce['titre']; ?></h3>
                <p class="Type">Type d'image : <?php echo $annonce['type']; ?> </p>
                <p class="Humain">Humain : <?php echo $annonce['p_humain']; ?> </p>
                <p class="Produit">Produit : <?php echo $annonce['p_produit']; ?></p>
                <p class="Institutionnelle">Institutionnelle : <?php echo $annonce['p_instit']; ?> </p>
                <p class="Format">Format : <?php echo $annonce['format']; ?> </p>
                <p class="Credit">Crédits photos : <?php echo $annonce['credits']; ?> </p>
                <p class="Tags">Droits : <?php echo $annonce['droits']; ?> </p>
                <p class="Tags">Tags : <?php echo $annonce['tags']; ?> </p>
                <button ><a href="modification.php?id=<?php echo $annonce['id_aliment']; ?>" style="text-decoration: none; color: black;">Modifier ou supprimer</a></button>
                <button ><a href="<?php echo $annonce['img']; ?>" style="text-decoration: none; color: black;" download>Télécharger</a></button>
            </div>
        </div>
    </div>
</div>






<?php } ?>

<?php include("inc/footer.inc.php"); ?>