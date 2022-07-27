<?php
$preco = (int)$_GET["valor"] - (int)$_GET["valor"] / 10;
echo "Desconto de 10%: $preco";
?>

Outra forma:

<?php
$preco = (int)$_GET["valor"];
$desconto = $preco / 10;
echo "Desconto de 10%: ", $preco - $desconto;
