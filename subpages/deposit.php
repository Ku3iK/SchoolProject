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
        include "../components/headerForSubpages.pl"
    ?>
    <main class="test">
        <h2>Wpłać</h2>
        <form method="POST" action="depositSuccess.php">
            <input 
                id="amount" 
                name="amount" 
                type="number" 
                placeholder="Suma"
                step=0.01
            >
            <button type="submit">Wpłać</button>
        </form>
    </main>
    <?php 
        include "../components/footer.pl"
    ?>
</body>
</html>