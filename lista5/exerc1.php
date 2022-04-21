<?php
$produtoDisp= $_POST["txtProduto"];
$produtoInf = array('mouse', 'headset', 'teclado', 'monitor', 'impressora', 'nobreak', 'notebook', 'roteador');
$produtoDisp= strtolower($produtoDisp);

$indice = array_search($produtoDisp, $produtoInf);
$indice++;

if($indice)
{
    echo "Código do produto: ".($indice);
}
else
{
    echo "O produto não foi encontrado! Confira o nome e digite novamente.";
}

?>
