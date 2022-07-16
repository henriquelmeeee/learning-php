<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $valorum = (int)$_GET["a"];
        $valordois = (int)$_GET["b"];
        echo "A soma entre $valorum e $valordois é ", $valorum + $valordois
    ?>
</body>
</html>
