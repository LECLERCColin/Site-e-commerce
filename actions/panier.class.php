<?php
class panier{

    private $DB;

    public function __construct($DB){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
        $this->DB = $DB;
    }

    public function count(){
        return array_sum($_SESSION['panier']);
    }

    public function total(){
        $total = 0;
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $produits = array();
        }else{
            $produits = $this->DB->query('SELECT * FROM produits WHERE ID in ('.implode(',',$ids).')');
        }
        foreach ( $produits as $produit ) {
            $total += $produit->Prix * $_SESSION['panier'][$produit->ID];
        }
        return $total;
    }
    
    public function add($produit_id){
        if(isset($_SESSION['panier'][$produit_id])){
            $_SESSION['panier'][$produit_id]++;
        }else{
            $_SESSION['panier'][$produit_id] = 1;
        }
    }
}