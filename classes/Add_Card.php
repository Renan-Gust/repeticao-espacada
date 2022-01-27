<?php

require_once '../connection.php';

$content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
$content_type = filter_input(INPUT_POST, 'content_type');

$date = Date('Y-m-d');

if($content){
    $sql_add = mysqli_query(
        $on, 
        "INSERT INTO cards_content (content, created_at, content_type, see_card_again) VALUES
        ('$content', '$date', '$content_type', '$date')"
    );

    if($sql_add){
        echo "
            <script>
                alert('Adicionado com sucesso')
                window.location = '../index.php'
            </script>
        ";
    }
} else {
    echo "
        <script>
            alert('Preencha os campos necessários')
        </script>
    ";
}