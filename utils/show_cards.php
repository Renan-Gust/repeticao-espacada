<?php

require_once './connection.php';

$sql_read = mysqli_query($on, "SELECT * FROM cards_content");
$cards_total = [];

while($results = mysqli_fetch_array($sql_read)) {
    array_push($cards_total, $results);
}