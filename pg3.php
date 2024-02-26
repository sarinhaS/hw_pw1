<?php

    function celsius($n) {
        return ($n - 32) / 1.8;
    };

    echo "A conversão de 90° Fahrenheit é de: " . celsius(90) . "<br>";
    echo "A conversão de 77° Fahrenheit é de: " .  celsius(77) . "<br>";
    echo "A conversão de 52° Fahrenheit é de: " . celsius(52) . "<br>";
    echo "A conversão de 12° Fahrenheit é de: " . celsius(12) . "<br>";

?>