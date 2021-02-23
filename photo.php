<?php include("inc/header.inc.php");?>

<?php if (!empty($_GET)) { ?>

<?php

$requeteSQL = $pdo->prepare("SELECT * FROM aliment WHERE id_aliment = $_GET[id]");
$requeteSQL->execute();     
$annonce = $requeteSQL->fetch();



?>   


<div class='container-fluid' >
    <div class="card mx-auto col-md-3 col-10 mt-5"> <img class='mx-auto img-thumbnail' src="<?php echo $annonce['img']; ?>" width="500" height="500" />
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <h3 class="card-title font-weight-bold">Titre : <?php echo $annonce['titre']; ?></h3>
                <p class="Type">Type d'image : </p>
                <p class="Produit">Produit : </p>
                <p class="Humain">Humain : </p>
                <p class="Institutionnelle">Institutionnelle : </p>
                <p class="Format">Format : </p>
                <p class="Credit">Crédits photos : </p>
                <p class="Tags">Tags : </p>
                <button ><a href="modification.php?id=<?php echo $annonce['id_aliment']; ?>" style="text-decoration: none; color: black;">Modifier ou supprimer</a></button>
            </div>
        </div>
    </div>
</div>






<?php } ?>

<?php include("inc/footer.inc.php"); ?>