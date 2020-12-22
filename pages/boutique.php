
<h1>FIGURINE</h1>


<?php $produits = $DB->query('SELECT * FROM produits where Cat = "FIG"'); ?>
    <div class="box">
    <?php foreach ($produits as $produit): ?>
        <div class="products">
            <div class="body_content">
                <span class="size"><img src="images/<?= $produit->ID; ?>.jpg" alt="figurine"></span>
            </div>

            <div class="info_stuff">
                <h3><?php echo $produit->Nom; ?></h3>
            </div>

            <div class="description">
                <?php echo $produit->Description; ?>
            </div>

            <div class="price_content">
                <p class="price"><?php echo $produit->Prix; ?>€</p>
                
            </div>
            <div class="mid">
                <a class="add" href="./actions/addpanier.php?id=<?= $produit->ID; ?>"><button type="button" name="add" aria-label="Ajouter au panier" class="ajouter">Ajouter au panier</button></a> 
            </div>
            
        </div>
    <?php endforeach ?>
</div>