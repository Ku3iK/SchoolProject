<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>Bankomat/Wpłatomat</title>
</head>
<body>
    <?php 
        include "../components/headerForSubpages.php"
    ?>
    <main class="test">
    <?php
            include "../helpers/depositFun.php";
        
            $deposit = $_POST['amount'];

            $result = handleDeposit($_COOKIE['cardNumber'], $_COOKIE['pin'], $deposit);

            print"
                $result
            ";
        ?>
    <a href="../index.php" class="buttonLink"><button>Strona główna</button></a>
    </main>
    <?php 
        include "../components/footer.php"
    ?>
</body>
</html>