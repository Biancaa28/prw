<?php
$num1 = $_POST["txtPrimeiroNum"];
$num2 = $_POST["txtSegundoNum"];
$matOperacao = $_POST["matOperacao"];

if($matOperacao=="soma")
{
    echo($num1+$num2);
}
else
{
    if($matOperacao=="subtracao")
    {
        echo($num1-$num2);
    }
    else
    {
        if($matOperacao=="divisao")
        {
            echo($num1/$num2);
        }
        else
        {
            if($matOperacao=="multiplicacao")
            {
                echo($num1*$num2);
            }
        }
    }
}
?>
