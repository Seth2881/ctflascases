<?php require_once 'php/session_check.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/main.css?v=<?= time() ?>">
    <link rel="stylesheet" href="css/login_inscription_style.css?v=<?= time() ?>">

    <title>CTF | Victory</title>
</head>

<body>
    <header id="menu">
        <div class="lien-gauche">
            <a class="logoacceuil" href="#"><img id="logo" src="image/logo-acceuil.jpg" alt="logo de l'application"></a>
            <a class="lienacceuil" href="#">
                <h3>Congratulation</h3>
            </a>
            <h3 class="lienacceuil">|</h3>
            <a class="lienacceuil" href="index.php">
                <h3>Logout</h3>
            </a>
        </div>
    </header>
    <main>
        <form id="form-win" action="php/add_winner.php" method="post">
            <label for="name-login">Winner Pseudo</label>
            <input name="name" id="name-login" type="text" required />
            <button type="submit">Submit</button>
        </form>

        <?php require_once 'php/load_content.php' ?>

    </main>
</body>

</html>