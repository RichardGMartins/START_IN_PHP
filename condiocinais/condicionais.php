<?php 

    $var1 = 3;
    $var2 = 3;
    
    #Condicional de igualdade (Completa)
    if($var1 == $var2)
    {
        echo("São as mesma pessoas");
    }
    else 
    {
        echo ("Não são as mesmas pessoas");
    }
     echo ("<br><br>");
     #Condicional que verifica o mesmo data type
    if($var1 === $var2) 
    {
        echo("Mesmo data type");
    }
    else
    {
        echo("Data type diferente");
    }
    echo ("<br><br>");
    
    #Operador ternário
    echo($var1 === $var2?"é igual":"é diferente");


?>