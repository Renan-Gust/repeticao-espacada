<?php

require './views/add_card_modal.php';
require_once 'show_cards.php';

$date = Date('Y-m-d');

$see_card_today = [];

$last_click = '';
$last_click_day = 0;

foreach($cards_total as $key => $value){
    if($value['see_card_again'] === $date){
        array_push($see_card_today, $value);
    }

    if($value['last_click'] && $value['see_card_again'] === $date){
        $last_click = $value['last_click'];
        $last_click_day = Date('d', strtotime("$last_click"));
    }
}