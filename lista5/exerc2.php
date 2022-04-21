<?php
$produtoDisp= $_POST["txtProduto"];
$produtoInf = array('mouse', 'headset', 'teclado', 'monitor', 'impressora', 'nobreak', 'notebook', 'roteador');
$preco = array('R$50,00', 'R$275,00', 'R$110,00', 'R$2500,00', 'R$2000,00', 'R$300,00', 'R$3500,00', 'R$150,00');
$produtoDisp= strtolower($produtoDisp);

$indice = array_search($produtoDisp, $produtoInf);
$indice++;

if($indice)
{
    echo "Código do produto: ".($indice)."<br>". "Produto digitado: " .($produtoDisp)."<br>". "Preço: ".($preco[$indice-1]);
}
else
{
    echo "O produto não foi encontrado! Confira o nome e digite novamente.";
}

?>
