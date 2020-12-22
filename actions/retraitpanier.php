<?php
ini_set('display_errors', 'off');
require '../components/_header.php';
if(isset($_GET['del'])){
  if($_SESSION['panier'][$_GET['del']] == 1){
    unset($_SESSION['panier'][$_GET['del']]);
    die('<div id="card" class="animated fadeIn">
    <div id="upper-side">
        <h3 id="status">
        Retrait validé
      </h3>
    </div>
    <div id="lower-side-e">
      <p id="message">
        Article retiré avec succès.
      </p>
      <a href="../?page=panier" id="contBtn">Retour au panier</a>
    </div>
  </div>');
  }
  elseif($_SESSION['panier'][$_GET['del']] == 0){
    die('<div id="card" class="animated fadeIn">
    <div id="upper-side-e">
        <h3 id="status">
        Erreur de retrait
      </h3>
    </div>
    <div id="lower-side">
      <p id="message">
        Cet article ne se trouve pas votre panier.
      </p>
      <a href="../?page=panier" id="contBtn-e">Retour au panier</a>
    </div>
  </div>');
  }
  else{
    $_SESSION['panier'][$_GET['del']]--;
    die('<div id="card" class="animated fadeIn">
    <div id="upper-side">
      
        <h3 id="status">
        Retrait validé
      </h3>
    </div>
    <div id="lower-side-e">
      <p id="message">
      Article retiré avec succès.
      </p>
      <a href="../?page=panier" id="contBtn">Retour au panier</a>
    </div>
  </div>');
  }
}else{
    die('<div id="card" class="animated fadeIn">
    <div id="upper-side-e">
        <h3 id="status">
        Erreur de retrait
      </h3>
    </div>
    <div id="lower-side">
      <p id="message">
        Choisir un article.
      </p>
      <a href="../?page=panier" id="contBtn-e">Retour au panier</a>
    </div>
  </div>');
}

?>