<?php
require '../components/_header.php';
if(isset($_GET['id'])){
    $produit = $DB->queryadd('SELECT id FROM produits WHERE id=:id', array('id' => $_GET['id']));
    if(empty($produit)){
        die('<div id="card" class="animated fadeIn">
        <div id="upper-side-e">
            <h3 id="status">
            Erreur
          </h3>
        </div>
        <div id="lower-side">
          <p id="message">
            Cet article est inexistant.
          </p>
          <a href="../?page=boutique" id="contBtn-e">Retour à la boutique</a>
        </div>
      </div>');
    }
    $panier->add($produit[0]->id);
    die('<div id="card" class="animated fadeIn">
    <div id="upper-side">
        <h3 id="status">
        Article ajouté au panier
      </h3>
    </div>
    <div id="lower-side-e">
      <p id="message">
        Article ajouté au panier.
      </p>
      <a href="../?page=boutique" id="contBtn">Retour à la boutique</a>
    </div>
  </div>');
}else{
    die('<div id="card" class="animated fadeIn">
    <div id="upper-side-e">
        <h3 id="status">
        Erreur
      </h3>
    </div>
    <div id="lower-side">
      <p id="message">
        Vous devez choisir un article.
      </p>
      <a href="../?page=boutique" id="contBtn-e">Retour à la boutique</a>
    </div>
  </div>');
}