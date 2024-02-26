<?php
    $ginastas[0]["nome"] = "Jade";
    $ginastas[0]["nota"] = 12.95;
    $ginastas[0]["pais"] = "Brasil";
    $ginastas[1]["nome"] = "Shawn";
    $ginastas[1]["nota"] = 13.50;
    $ginastas[1]["pais"] = "EUA";
    $ginastas[2]["nome"] = "Daiane";
    $ginastas[2]["nota"] = 14.35;
    $ginastas[2]["pais"] = "Brasil";
    $ginastas[3]["nome"] = "Nadia";
    $ginastas[3]["nota"] = 12.90;
    $ginastas[3]["pais"] = "Romênia";

    echo "<h2>Lista com o nome das ginastas:</h2>";
    for($i = 0; $i <= 3; $i++){
        echo $ginastas[$i]['nome'] . "<br>";
    }

    echo "<h2>Nota média:</h2>";
    $med = 0;
    for($i = 0; $i <= 3; $i++){
        $med =  $ginastas[$i]['nota'] + $med;
    }
    echo $med/4;

    echo "<h2>Lista com o nome das ginastas com nota acima de 13:</h2>";
    for($i = 0; $i <= 3; $i++){
        if($ginastas[$i]['nota'] >= 13){
            echo $ginastas[$i]['nome'] . "<br>";
        }
    }
    
    echo "<h2>Ginasta com a nota mais alta:</h2>";
    $notaMA = 0;
    $nameGi = "";

    foreach($ginastas as $ginasta){
        if($ginasta['nota'] > $notaMA){
            $notaMA = $ginasta['nota'];
            $nameGi = $ginasta['nome'];
        }
    }
    echo $nameGi;
?>