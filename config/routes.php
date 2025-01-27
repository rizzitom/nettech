<?php
function getPage($db) {
    $lesPages['accueil'] = "accueilControleur";
    $lesPages['services'] = "servicesControleur";
    $lesPages['connexion'] = "connexionControleur";
    $lesPages['deconnexion'] = "deconnexionControleur";
    $lesPages['inscrire'] = "inscrireControleur";
    $lesPages['panier'] = "panierControleur";
    $lesPages['produit'] = "produitControleur";
    $lesPages['type'] = "typeControleur";
    $lesPages['utilisateur'] = "utilisateurControleur";
    $lesPages['utilisateurmodif'] = "utilisateurModifControleur";
    $lesPages['maintenance'] = "maintenanceControleur";



    if ($db!=null){
        if(isset($_GET['page'])){

            $page = $_GET['page'];
        } else{

        $page = 'accueil';
        }

        if (isset($lesPages[$page])){
            $contenu = $lesPages[$page];
        }
        else { 
            $contenu = $lesPages["accueil"];
        }
    }

        else{
        $contenu = $lesPages['maintenance'];
       }
       
       return $contenu;
}
?>
