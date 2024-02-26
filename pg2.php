<?php

$num = rand(1, 15);
echo "Número sorteado é: " . $num . "<br>";

for ($i = $num; $i <= $num * 3; $i++) {
    if ($i % 7 == 0) {
        echo "O primeiro número divisível por 7 é: " . $i;
        break;
    } else {
        echo 'Número ' . $i . "<br>";
    }
}

?>