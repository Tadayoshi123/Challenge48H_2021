<?php include("inc/header.inc.php"); ?>


<div class="TITRE" id="NEWS" >Galerie</div>

<section class="news_list" > 

<?php
        $requeteSQL = $pdo->prepare("SELECT * FROM aliment ");
        $requeteSQL->execute();
        while ($userinfo = $requeteSQL->fetch()) { ?> 

        <div class="product">                    
            <div class="article">
            <div class="article1">
                <img class="article1" src="<?php echo $userinfo['img'];?>" >
                    <div class="overlay">
                            <button ><a href="photo.php?id=<?php echo $userinfo['id_aliment']; ?>" style="text-decoration: none; color: white;">Voir photo</a></button>
                    </div>
            </div>                              
            </div>                    
        </div>

        <?php }
        ?>
    
</section>  
<?php include("inc/footer.inc.php"); ?>


