<?php
    function checkUser($cardNumber, $pin) {
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
            print"
                <h2 class='mainTitle'>Stan konta: $checkBalance</h2>
            ";
            return true;
        }else {
            return false;
        }
    }
?>