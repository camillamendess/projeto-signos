<?php include('./layouts/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra seu signo</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Descubra seu signo:</h2>
        <form id="signo-form" method="POST" action="./layouts/show_zodiac_sign.php">
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Descobrir</button>
        </form>
    </div>
</body>
</html>


