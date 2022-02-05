<?php

require_once '../connection.php';

$id = $_GET['card_id'];
$sum_date = $_GET['sum_date'];

$new_date = Date('Y-m-d', strtotime("$sum_date days"));
$last_click = Date('Y-m-d');

$sql_update = mysqli_query(
    $on,
    "UPDATE cards_content SET see_card_again = '$new_date', last_click = '$last_click' WHERE id = $id"
);

if($sql_update){
    echo "
        <script>
            window.location = '../index.php'
        </script>
    ";
}