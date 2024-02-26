<?php 

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d', time());
    echo "Hoje é dia: " . $data . "<br><br>";

    for($num = 1 ; $num <= 31 ; $num++){ 
        if($num != $data){
            echo $num . "<br>";
        }
    }

?>