<!DOCTYPE html>
<html>

    <head>
    <link rel="stylesheet" type="text/css" href="menu.css"/>

        <meta charset="utf-8" />
                
        <title>Menu de la cantine</title> 
    </head>

    <body>
        <table class ="table1" border=3>  
            <thead >
                <tr>
                    <th> Jour </th>
                    <th> Entrée </th>
                    <th> Plat </th>
                    <th> Dessert </th>
                </tr>
            </thead>  


            <tbody >
            <form  action="fonction.php"  method="POST">
              
  
                    <?php   
                    
                      
                        echo "</tr>";
                        echo '<input type="submit" value="Ajouter un repas" id="menu" onclick="/Menu/ajouter.php"';
                        echo "<tr>";
                    ?>
                 
                    <?php
                         echo '<input type="submit" value="Rechercher" onclick="/Menu/Rechercher.php"';        
                    ?>
                
                    <?php
                    
                    $menus = array(
                        'Lundi'     => array('Entree'=>'salade', 'plat'=>'Viande', 'dessert'=>'fruit'),
                        'Mardi'     => array('Entree'=>'Salade carotte', 'Plat'=>'Rôti', 'Dessert'=>'Fromage'),
                        'Mercredi'  => array('Entree'=>'Salade tomate', 'Plat'=>'Rôti poulet fumé', 'Dessert'=>'Fromage'),
                        'Jeudi'     => array('Entree'=>'Salade de laitue', 'Plat'=>'Sauté de poulet', 'Dessert'=>'Yaourt'),
                        'Vendredi'  => array('Entree'=>'Salade de pomme de terre', 'Plat'=>'Poisson pané', 'Dessert'=>'Fromage et Orange'));
                
                    foreach($menus as $key1 => $menu)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo "".$key1."</br>";
                        echo "</td>";
                        
                        
                        foreach($menu as $key2 => $value2)
                            {
                            echo "<td>";
                                echo  "" .$value2. "</br>\n";
                                echo "</td>";
                            }
                    }

                    ?>
                        </form>
                        <form   action="supprimer.php"  method="POST">
                            <td>
                                <input type="submit" value="Supprimer" onclick="/Menu/supprimer.php";/>
                            </td>
                        </form> 

                        <form   action="modifier.php"  method="POST">
                            <td>
                                <input type="submit" value="Modifier" onclick="/Menu/modifier.php"; />
                            </td>
                        </form>
                        
          


                
            </tbody>
        </table>
    </body>
</html>    