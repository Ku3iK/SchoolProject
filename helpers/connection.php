<?php 
    function connectDatabase($query) {
        $connection = mysqli_connect("localhost", "root", "", "bankomat")
        or die("Brak polaczenia z baza danych");

        $result = mysqli_query($connection ,$query)
        or die("Problem z baza danych");

        mysqli_close($connection);

        return $result;
    }
?>