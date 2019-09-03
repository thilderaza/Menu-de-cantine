<?php 
    $element = $_REQUEST['Supprimer'];
    unset($menu['$element']);
    print_r($menu);
?>