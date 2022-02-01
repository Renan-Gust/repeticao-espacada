<?php

$id = $_GET['card_id'];
$sum_date = $_GET['sum_date'];

echo "ID: " . $id . "<br>";

// $dateUser = Date('Y-m-d', strtotime('+0 days', $new_date));
$new_date = Date('Y-m-d', strtotime("$sum_date days"));

echo "Nova Data: " . $new_date . "<br>";

echo "Valor sendo somado: " . $sum_date . "<br>";

// $sql_update = mysqli_query(
//     $on,
//     "UPDATE cards_content SET see_card_again = '$anuncianteValue' WHERE id = $id"
// );