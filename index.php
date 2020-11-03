<?php
    include './helpers/common.php';
?>

<!DOCTYPE html>
<html lang='pl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $lang['PAGE_TITLE']; ?></title>
</head>
<body>
    <?php 
        include "components/header.php"
    ?>
    <main>
        <form method="POST" action="subpages/loginCorrect.php" id="loginForm">
            <input 
                id="cardNumber" 
                name="cardNumber" 
                type="number" 
                placeholder=<?php echo $lang['USER_CARD_LOGIN_CONTENT']; ?>
            >
            <input 
                id="pin" 
                name="pin" 
                type="number" 
                placeholder=<?php echo $lang['USER_PIN_LOGIN_CONTENT']; ?> 
                style="-webkit-text-security: disc;" 
            >
            <button id="loginSubmit" type="submit"><?php echo $lang['BUTTON_SUBMIT_CONTENT']; ?></button>
        </form>
    </main>
    <?php 
        include "components/footer.php"
    ?>
    <script src="main.js"></script>
</body>
</html>