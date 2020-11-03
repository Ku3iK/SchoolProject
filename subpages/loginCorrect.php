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
        include "../components/headerForSubpages.html"
    ?>
    <main class="test">
        <?php
            include "../helpers/login.php";

            $cardNumber = $_POST['cardNumber'];
            $pin = $_POST['pin'];
            setcookie('cardNumber', $cardNumber, time()+3600);
            setcookie('pin', $pin, time()+3600);

            $result = checkUser($cardNumber, $pin);

            if($result === true) {
            ?>
                <div class="navigation">
                    <a href="deposit.php" class="buttonLink"><button>Wpłać</button></a>
                    <a href="payOut.php" class="buttonLink"><button>Wypłać</button></a>
                    <a href="../index.php" class="buttonLink"><button>Wyloguj</button></a>
                </div>
            <?php
            }else {
                print "
                    <h2>Błędne dane logowania</h2>
                    <a href='../index.php' class='buttonLink'><button>Spróbuj ponownie</button></a>
                ";
            }
        ?>
    </main>
    <?php 
        include "../components/footer.html"
    ?>
</body>
</html>