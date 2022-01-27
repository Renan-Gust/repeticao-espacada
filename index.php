<?php

require_once './views/add_card.php';
require_once './utils/contents.php';
require_once './utils/show_cards.php';

require_once './connection.php';

$date = Date('Y-m-d');

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



$teste = [];
$teste2 = [];

foreach($cards_total as $key => $value){
    if($value['see_card_again'] === $date){
        // array_push($teste, $value);
        array_push($teste, $key + 1);

        // echo $key + 1;
    }
}

$id = $teste[0];

$sql_read = mysqli_query(
    $on, 
    "SELECT content, see_card_again FROM cards_content WHERE id = $id"
);



while($results = mysqli_fetch_array($sql_read)) {
    array_push($teste2, $results);
    // $teste3 = $results;
}

?>

<body>
    <div class="main-content">
        <div class="content-wrapper">

            <?php if(!empty($teste)) : ?>
                <div class="content">
                    <div class="card">
                        <div class="card-content">
                            <?= $teste2[0]['content'] . "<br>"; ?>
                            <?= $teste2[0]['see_card_again'] . "<br>"; ?>
                            <?php 
                            
                                $see = $teste2[0]['see_card_again'];

                                echo strtotime($see) . "<br>";
                              
                                $date2 = Date('Y-m-d');

                                if(strtotime($date2) == strtotime($see)){
                                    echo "É igual" . "<br>";
                                }

                                $dateUser = Date('Y-m-d', strtotime('+4 days'));

                                echo strtotime($dateUser) . "<br>";

                                // echo strtotime($dateUser) . strtotime($see) . "<br>";
                                // Pegar a data do see_card_again transformar em segundos
                                // Quando for clicado no botão somar o equivalente do botão
                                // Transformar em data novamente e atualizar no banco
                            
                            ?>
                        </div>

                        <div class="buttons">
                            <div>
                                <span>10min</span>
                                <button>Errei</button>
                            </div>
                            <div>
                                <span>10min</span>
                                <button>Fácil</button>
                            </div>
                            <div>
                                <span>10min</span>
                                <button>Difícil</button>
                            </div>
                            <div>
                                <span>10min</span>
                                <button>Bom</button>
                            </div>
                            <div>
                                <span>10min</span>
                                <button>Muito Fácil</button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php else : ?>
                <p>Não tem cards</p>
            <?php endif; ?>

            <?php print_r($teste2[0]); ?>

            <!-- <button onclick="addCard()">Adicionar Card</button> -->
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