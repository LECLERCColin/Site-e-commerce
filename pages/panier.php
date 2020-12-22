
<?php

$ids = array_keys($_SESSION['panier']);
if(empty($ids)){
    $produits = array();
}else{
$produits = $DB->query('SELECT * FROM produits WHERE ID in ('.implode(',',$ids).')');
}
?>

<?php
if(isset($_GET['del'])){
    $panier->del($_GET['del']);
}
?>

<div id="all">
    <div id="page">
      <table class="table table-dark table-striped">
      <thead>
          <tr>
            <th class="first">Photo</th>
            <th class="second">Quantité</th>
            <th class="third">Nom</th>
            <th class="fourth">Prix</th>
            <th class="fifth">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($produits as $produit): ?>
          <tr class="productitm">
            <td><img src="images/<?= $produit->ID; ?>.jpg" alt="figurine" class="thumb"></td>
            <td><?= $_SESSION['panier'][$produit->ID]; ?></td>
            <td><?php echo $produit->Nom; ?></td>
            <td><?php echo $produit->Prix; ?>€</td>
            <td><span class="remove"><a href="./actions/retraitpanier.php?del=<?= $produit->ID; ?>" class="del"><img src="./images/trash_del.png" alt="X"></a></span></td>
          </tr>
        <?php endforeach ?>
          
          <tr class="checkoutrow">
          <?php
            if(empty($ids)){
                echo('<td colspan="5" class="checkout">Votre panier est vide !</td>');
            }else{
                echo('<td colspan="5" class="checkout"><h1>Total :</h1> '.$panier->total().'
                €<button id="submitbtn">Payer</button></td>');
            } ?>
          </tr>
        </tbody>
  
      </table>
      
    </div>
  </div>