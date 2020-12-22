<?php

echo('<div id="card" class="animated fadeIn">
<div id="upper-side">
  
    <h3 id="status">
    Déconnexion
  </h3>
</div>
<div id="lower-side-e">
  <p id="message">
    Deconnecté.
  </p>
  <a href="?page=boutique" id="contBtn">Retour à la boutique</a>
</div>
</div>');
session_destroy();
