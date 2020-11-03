<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Bankomat/Wpłatomat</title>
</head>
<body>
    <?php 
        include "components/header.html"
    ?>
    <main>
        <form method="POST" action="subpages/loginCorrect.php" id="loginForm">
            <input 
                id="cardNumber" 
                name="cardNumber" 
                type="number" 
                placeholder="Numer karty"
            >
            <input 
                id="pin" 
                name="pin" 
                type="number" 
                placeholder="PIN" 
                style="-webkit-text-security: disc;" 
            >
            <button id="loginSubmit" type="submit">Zatwierdź</button>
        </form>
    </main>
    <?php 
        include "components/footer.html"
    ?>
    <script src="main.js"></script>
</body>
</html>