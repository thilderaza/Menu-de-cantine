<div class="content">
    
    <form class="txtentre" action="td1.2.php"  method="REQUEST">
            <table>
                <tr>
                    <label for='jour'>Jour:</label>
                        <select name="jour1"  id="jour1">
                                <option value="">Selectionner un jour</option>
                                <option  value="Lundi">Lundi</option>
                                <option  value="Mardi">Mardi</option>
                                <option  value="Mercredi">Mercredi</option>
                                <option  value="Jeudi">Jeudi</option>
                                <option  value="Vendredi">Vendredi</option>
                        </select>
                </tr>           
            

                <tr>
                    <td align="right">
                        <label for="Entree">Entrée :</label>
                    </td>
                    <td>
                        <input type="text"  name="entree" id="entree" size="30" />
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        <label for="plat">Plat :</label>
                    </td>
                    <td>
                        <input type="text"  name="plat" id="Plat" size="30" />
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        <label for="Dessert">Dessert :</label>
                    </td>
                    <td>
                        <input type="text"  name="dessert" id="dessert" size="30" />
                    </td>
                </tr>
                <tr>
                         
                <td>
                              <input type="submit" id="valider" name="valider" value="Valider"/>
                              </td>
                    </tr> 
            </table>     
    </form>
</div>



<?php

$element = $_REQUEST['Modifier'];

$menu = array('Salade', 'Cari', 'Fruits');
var_dump($menu);
$menu[1] = 'rougail';
var_dump($menu);
?>
