<?php
$num =0;
$soma=0;
for($num=0; $num<100; $num++)
{
    if($num%2==0)
    {
        $soma=$soma+$num;
    }
}

echo "A soma dos números pares menor que 100 é: " . $soma;

?>