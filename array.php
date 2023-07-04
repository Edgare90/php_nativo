<?php

$array = [1,2,3,4,5,6,7,8,9,10,11,12];

foreach($array as $elemento)
{
    if($elemento % 2 === 0)
    {
        echo "El numero: ".$elemento." es un numero par";
    }
}



?>