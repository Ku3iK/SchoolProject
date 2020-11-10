<?php
    include './helpers/common.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $lang['PAGE_TITLE']; ?></title>
</head>
<body>
    <?php 
        include "./components/headerForSubpages.php"
    ?>
    <main class="test">
        <h2><?php echo $lang['BUTTON_PAYOUT_CONTENT']; ?></h2>
        <form method="POST" action="payOutSuccess.php">
            <input 
                id="amount" 
                name="amount" 
                type="number" 
                placeholder="<?php echo $lang['PAYOUT_CONTENT']; ?>" 
                step=0.01
            >
            <button type="submit"><?php echo $lang['BUTTON_PAYOUT_CONTENT']; ?></button>
        </form>
    </main>
    <?php 
        include "./components/footer.php";
        header('refresh: 20');
        if (!isset($_COOKIE['cardNumber'])) {
            header('location:./index.php');
        }
    ?>
</body>
</html>