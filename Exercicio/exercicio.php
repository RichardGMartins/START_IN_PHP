<?php 
    #########Exercício#########
    //Crie um código PHP que valide o alistamento Militar obrigatório
    //lembrando que +18 e masculino

    $gen1 = "M";
    $idade = 18;

    if ($gen1 === "M" && $idade > 17)
    {
        echo("Bem vindo ao Exercito !!");
    }
    else if ($idade < 18)
    {
        echo("Para o alistamento Obrigatório precisa ser maior de 18");
    }
    else 
    {
        echo("Para o alistamento OBRIGATÓRIO precisa ser Masculino e Maior de 18 anos");
    }

    echo("<br><br>");
    echo($gen1 == "M" && $idade > 17?"Bem Vindo ao Exercito!!!!!":"Para o alistamento Obrigatório precisa ser maior de 18");


?>