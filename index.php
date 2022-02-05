<?php

require_once './views/add_card_modal.php';
require_once './utils/show_cards.php';
require_once './utils/see_card_again.php';

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

<body>
    <div class="main-content">
        <div class="content-wrapper">

            <?php if(!empty($see_card_today)) : ?>
                <div class="content">
                    <div class="card">
                        <div class="card-content">
                            <?= $see_card_today[0]['content'] . "<br>"; ?>
                            <?= $see_card_today[0]['see_card_again'] . "<br>"; ?>
                        </div>

                        <div class="buttons">
                            <form action="./utils/update_card.php">
                                <input type="number" name="card_id" value="<?= $see_card_today[0]['id'] ?>" hidden>
                                <input type="number" name="sum_date" value="<?=  $last_click ? ($last_click_day * 1) - $last_click_day : 0 ?>" hidden>
                                <div>
                                    <span>10min</span>
                                    <button type="submit">Errei</button>
                                </div>
                            </form>

                            <form action="./utils/update_card.php">
                                <input type="number" name="card_id" value="<?= $see_card_today[0]['id'] ?>" hidden>
                                <input type="number" name="sum_date" value="<?=  $last_click ? ($last_click_day * 3) - $last_click_day : 5 ?>" hidden>
                                <div>
                                    <span>10min</span>
                                    <button type="submit">Fácil</button>
                                </div>
                            </form>

                            <form action="./utils/update_card.php">
                                <input type="number" name="card_id" value="<?= $see_card_today[0]['id'] ?>" hidden>
                                <input type="number" name="sum_date" value="<?=  $last_click ? ($last_click_day * 2) - $last_click_day : 1 ?>" hidden>
                                <div>
                                    <span>10min</span>
                                    <button type="submit">Difícil</button>
                                </div>
                            </form>


                            <form action="./utils/update_card.php">
                                <input type="number" name="card_id" value="<?= $see_card_today[0]['id'] ?>" hidden>
                                <input type="number" name="sum_date" value="<?=  $last_click ? ($last_click_day * 4) - $last_click_day : 3 ?>" hidden>
                                <div>
                                    <span>10min</span>
                                    <button type="submit">Bom</button>
                                </div>
                            </form>

                            <form action="./utils/update_card.php">
                                <input type="number" name="card_id" value="<?= $see_card_today[0]['id'] ?>" hidden>
                                <input type="number" name="sum_date" value="<?=  $last_click ? ($last_click_day * 6) - $last_click_day : 7 ?>" hidden>
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