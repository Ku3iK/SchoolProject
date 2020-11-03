<?php
    function handleDeposit($cardNumber, $pin, $deposit) {
        include "connection.php";
        $query = "SELECT pin, balance FROM users WHERE cardNumber = $cardNumber";
        $result = connectDatabase($query);
        $checkPIN;
        $checkBalance;

        while($row = mysqli_fetch_array($result)) {
            $checkPIN = $row[0];
            $checkBalance = $row[1];
        }

        if($pin === $checkPIN) {
            if($deposit <= 0) {
                print"
                    <h2>Kwota minimalna musi być większa od 0</h2>
                ";
            }else {
                $newBalance = $checkBalance + $deposit;
                $doDeposit = "UPDATE users SET balance = $newBalance WHERE cardNumber = $cardNumber";
                connectDatabase($doDeposit);
                print"
                    <h2 class='operationSuccess'>Operacja zakończona sukcesem!</h2>
                    <p class='operationSuccess'>Wpłacono: $deposit</p>
                ";
            }
        }else {
            print"
                <h2>Błędne hasło</h2>
            ";
        }
    }
?>