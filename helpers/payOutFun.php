<?php
    function handlePayOut($cardNumber, $pin, $amount) {
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
            if($checkBalance < $amount || $checkBalance == 0) {
                print"
                    <h2>Brak środków na koncie</h2>
                ";
            }else if($amount < 0) {
                print"
                    <h2>Wartość jest ujemna!</h2>
                ";
            }else if($amount == 0){
                print"
                    <h2>Minimalna wartość wypłacanych pieniędzy musi być większa od 0</h2>
                ";
            }else {
                $newBalance = $checkBalance - $amount;
                $doPayOut = "UPDATE users SET balance = $newBalance WHERE cardNumber = $cardNumber";
                connectDatabase($doPayOut);
                print"
                    <h2 class='operationSuccess'>Środki zostały wypłacone</h2>
                    <p class='operationSuccess'>Wypłacono: $amount</p>
                ";
            }
        }else {
            print"
                <h2>Błędnę hasło</h2>
            ";
        }
    }
?>