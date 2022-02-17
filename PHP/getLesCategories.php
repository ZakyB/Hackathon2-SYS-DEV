<?php 

include ('./cnx.php');

$sql = $cnx ->prepare("SELECT * FROM categorie");
$sql -> execute();

foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
{
    echo "<option value=".$ligne['id'].">".$ligne['libelle']."</option>"
    ;
}

?>