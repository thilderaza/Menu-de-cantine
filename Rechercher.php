<?php

$elem_recherche = 'Sandwich';
if (in_array($elem_recherche, $menu)) :
echo 'Oui, la valeur '.$velem_recherche.' existe dans le tableau $menu.';
else :
echo 'Non, la valeur '.$elem_recherche.' n\'existe pas dans le tableau $menu.';
endif;

?>