<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horários</title>
</head>
<body>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('H', time());

        if($data >= 6 && $data <= 12){
            echo "<p style='color:green'> Bom dia! <p>";
        }else if($data >= 12 && $data <= 18){
            echo "<p style='color:red'> Boa tarde! <p>";
        }else if($data >= 18 && $data <= 0){
            echo "<p style='color:blue'> Boa Noite! <p>";
        }
    ?>
</body>
</html>