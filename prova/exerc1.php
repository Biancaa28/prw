<?php
$sal = 300;

if($sal<=300)
{
    $salarioR= $sal+(($sal*50)/100);
    echo "O salário com reajuste de 50% é de: ".$salarioR;
}
else
{
    $salarioR = $sal+(($sal*30)/100);
    echo "O salário com reajuste de 30% é de: ".$salarioR;
}
?>
