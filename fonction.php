<?php 
include ('ajouter.php');
if(isset($_POST['menu'])) {
        
        $entree = $_POST['entree'];
        $plat   = $_POST['plat'];
        $dessert = $_POST['dessert'];
echo $_POST['entree'];
        $menu = array($Entree,$Plat,$Dessert);
        $menu[] = $entree ;
        $menu[] = $plat ;
        $menu[] = $dessert ;
        print_r ($menu);
            
            echo " <form action=td1.2.php>";
            echo " <p>Votre repas est terminée</p>";
            echo " <p>Veuillez retourner à l'acceuil</p>";
            echo " <div>";
            echo " <input type=submit id=accueil name=td1.2 value=Retour vers l Accueil/> </div>";
}

?> 