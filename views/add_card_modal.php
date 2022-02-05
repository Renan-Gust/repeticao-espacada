<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .add-card {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container add-card">
        <div class="content">
            <form action="./utils/add_card.php" method="POST">
                <input type="text" name="content" placeholder="Conteúdo do seu card">
                <select name="content_type">
                    <option value="text">Texto</option>
                    <option value="image">Imagem</option>
                </select>
                <input type="submit" value="Adicionar">
            </form>
        </div>
    </div>
</body>

</html>