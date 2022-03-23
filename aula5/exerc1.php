<?php
$n1 = 4;
$n2 = 3;
$n3 = 1; 

if($n1 > $n2 && $n1 > $n3)
{
    if($n2 > $n3)
    {
        echo "Ordem decrescente: ". $n1. $n2. $n3;
    }
    else
    {
        echo "Ordem decrescente: ". $n1. $n3. $n2;
    }
}
else
{
    if($n2 > $n1 && $n2 > $n3)
    {
        if($n1 > $n3)
        {
            echo "Ordem decrescente: ". $n2. $n1. $n3;
        }
        else
        {
            echo "Ordem decrescente: ". $n2. $n3. $n1;
        }
    }
    else
    {
        if($n3 > $n1 && $n3 > $n2)
        {
            if($n1 > $n2)
            {
                echo "Ordem decrescente: ". $n3. $n1. $n2;
            }
            else
            {
                echo "Ordem decrescente: ". $n3. $n2. $n1;
            }
        }
    }
}
?>