<?php include("inc/header.inc.php"); ?>

<?php

$requeteSQL = $pdo->prepare("SELECT * FROM aliment WHERE id_aliment = $_GET[id]");
$requeteSQL->execute();     
$annonce = $requeteSQL->fetch();


if (isset($_POST["modifier"])) {
    
    $titre = htmlspecialchars($_POST['titre']);
  
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
$requeteSQL = $pdo->prepare("UPDATE aliment SET titre = ?, img= 'img/$name' WHERE id_aliment = $_GET[id]");
$requeteSQL->execute(array($titre));
 


echo  "  l'annonce a été modifié ";
header("Location: photo.php?id=".$annonce['id_aliment']);



}elseif (!empty($_POST["supprimer"])) {

$pdo->exec("DELETE FROM aliment WHERE id_aliment = $_GET[id] ");
header("Location: index.php");


} ?>


<section class="contact-form">
<form class="form-group" action="" method="post" name="modif" enctype='multipart/form-data'>


        <div class="form-group">
            <h5 for="text">Nom</h5>
            <input type="text" class="form-control" name="titre" id="" value="<?php echo $annonce['titre']?>">
        </div>


        <div class="form-group">
            <label for="titre">Photo</label>
            <input type="file" class="form-control-file" id="img" name="img[]">
        </div>
  
  
  <input type="submit" name="modifier" class="btn btn-primary" value="Modifier">


    <form action="" method="post">
                <input type="hidden" name="supprimer" value="1" >
                <input type="submit" value="Supprimer" class="btn btn-danger ">
    </form>   

</form>
</section>

<?php include("inc/footer.inc.php"); ?>