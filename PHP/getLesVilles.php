<?php 

include ('./cnx.php');

$sql = $cnx ->prepare("SELECT * FROM ville");
$sql -> execute();

foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
{
    echo "<option value=".$ligne['id'].">".$ligne['Libelle']."</option>"
    ;
}

?>