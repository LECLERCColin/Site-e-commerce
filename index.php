<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<?php
    require './components/nav.php';
?>

<?php
    if (array_key_exists('page', $_GET)) {
        $page = $_GET['page'];
    } else {
        $page = null;
    }

    $pages = [
        'boutique',
        'database',
        'panier',
        'logout',
        
    ];

    if (! $page) {
        require './pages/boutique.php';
    }

    elseif (in_array($page, $pages)) {
        if ($page === 'boutique' ) {
            require './pages/boutique.php';
        } elseif ($page === 'database' ) {
            require './pages/database.php';
        } elseif ($page === 'panier' ) {
            require './pages/panier.php';
        } elseif ($page === 'logout' ) {
            require './pages/logout.php';
        } 
    }
    else {
        echo '<div id="card" class="animated fadeIn">
        <div id="upper-side-e">
          <?xml version="1.0" encoding="utf-8"?> 
            </svg>
            <h3 id="status">
            Erreur
          </h3>
        </div>
        <div id="lower-side">
          <p id="message">
            Cette page est inexistante.
          </p>
          <a href="?page=boutique" id="contBtn-e">Retour à la boutique</a>
        </div>
      </div>';
    }
?>

</main>
</body>



</html>
