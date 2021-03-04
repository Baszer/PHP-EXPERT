<?php

include "db.con.php";
//is database connectie
$uid = ($_GET['ID']);
//vraagt ID van de gekozen persoon knop

$sql = "DELETE FROM superheroes WHERE ID = :ph_id";
//verwijdert gekozen persoon en verbind aan elkaar
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_id", $uid );
header("location:superheroes_index.php"); 
//stuurt terug naar index
$stmt->execute()

?>