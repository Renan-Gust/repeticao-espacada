<?php

require_once './views/add_card.php';
require_once './utils/contents.php';
require_once './utils/show_cards.php';

require_once './connection.php';

$date = Date('Y-m-d');

// echo $date . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./styles/styles.css">
</head>

<?php



$see_card_today = [];
// $teste2 = [];

foreach($cards_total as $key => $value){
    echo "see_card_again: " . $value['see_card_again'] . "<br>";

    if($value['see_card_again'] === $date){
        array_push($see_card_today, $value);
    }
}

// $sql_read = mysqli_query(
//     $on, 
//     "SELECT id FROM cards_content"
// );

// $sql_read = mysqli_query(
//     $on, 
//     "SELECT content, see_card_again FROM cards_content WHERE id = $card_id"
// );

// while($results = mysqli_fetch_array($sql_read)) {
//     array_push($teste2, $results);
// }


// while($results = mysqli_fetch_array($sql_read)) {
//     array_push($teste2, $results);
// }

// $card_id = $teste2[0]['id'];

// echo $card_id . "<br>";
// print_r($see_card_today);


?>

<body>
    <div class="main-content">
        <div class="content-wrapper">

            <?php if(!empty($see_card_today)) : ?>
                <div class="content">
                    <div class="card">
                        <div class="card-content">
                            <?= $see_card_today[0]['content'] . "<br>"; ?>
                            <?= $see_card_today[0]['see_card_again'] . "<br>"; ?>
                            <?php 
                              
                                $dateUser = Date('Y-m-d', strtotime('+5 days'));

                                // echo "Somando 4 dias: " . strtotime($dateUser) . "<br>";

                                $see_card_again = gmdate("Y-m-d", strtotime($dateUser));

                                echo "Transformando o total em data novamente: " . $see_card_again;

                                // Pegar a data do see_card_again transformar em segundos (Feito)
                                // Quando for clicado no botão somar o equivalente do botão
                                // Transformar em data novamente e atualizar no banco
                            
                            ?>
                        </div>

                        <div class="buttons">
                            <form action="./test.php">
                                <input type="number" name="card_id" value="<?= $see_card_today[0]['id'] ?>" hidden>
                                <input type="number" name="sum_date" value="1" hidden>
                                <div>
                                    <span>10min</span>
                                    <button type="submit">Errei</button>
                                </div>
                            </form>

                            <form action="./test.php">
                                <input type="number" name="card_id" value="<?= $see_card_today[0]['id'] ?>" hidden>
                                <input type="number" name="sum_date" value="5" hidden>
                                <div>
                                    <span>10min</span>
                                    <button type="submit">Fácil</button>
                                </div>
                            </form>

                            <form action="./test.php">
                                <input type="number" name="card_id" value="<?= $see_card_today[0]['id'] ?>" hidden>
                                <input type="number" name="sum_date" value="1" hidden>
                                <div>
                                    <span>10min</span>
                                    <button type="submit">Difícil</button>
                                </div>
                            </form>


                            <form action="./test.php">
                                <input type="number" name="card_id" value="<?= $see_card_today[0]['id'] ?>" hidden>
                                <input type="number" name="sum_date" value="3" hidden>
                                <div>
                                    <span>10min</span>
                                    <button type="submit">Bom</button>
                                </div>
                            </form>

                            <form action="./test.php">
                                <input type="number" name="card_id" value="<?= $see_card_today[0]['id'] ?>" hidden>
                                <input type="number" name="sum_date" value="7" hidden>
                                <div>
                                    <span>10min</span>
                                    <button type="submit">Muito Fácil</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <?php else : ?>
                <p>Não tem cards</p>
            <?php endif; ?>

            <button onclick="addCard()">Adicionar Card</button>
        </div>
    </div>
</body>

<script>
    function addCard() {
        document.querySelector('.add-card').style.display = "block";
    }
</script>

</html>

<!-- 

Colocar a data quando criar um card (Feito)

***Primeira Etapa***
Exibir os cards que são no mesmo dia que o dia atual, um de cada vez (Feito)





***Segunda Etapa***
Pegar o dia e o horário que ele foi clicado e dependendo do botão que será clicado
somar os dias da dificuldade + o dia e o horário dele

E atualizar o date desse card

Revisar card,
Se for "Errei" revisar em 10min
Se for "Fácil" revisar em 5 dias
Se for "Difícil" revisar em 1 dia
Se for "Bom" revisar em 3 dias
Se for "Muito Fácil" revisar em 7 dias



Se o card já foi visitado antes e dependendo do botão que foi clicado, 
aumentar os intervalos de dias multiplicando por 4


-->