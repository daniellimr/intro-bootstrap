<?php

/* foi chamado pelo index.php c esse comando aqui
<form action="funcoes.php" method="post">  chama os dados da funcao

if(isset($_POST['campo1'])) $campo1 = $_POST['campo1'];  // para ve o resultado na tela
echo $campo1; */

function teste(){
    //echo 'esse e o meu arquivo de funcoes';    
    return 'esse e o meu arquivo de funcoes';  // e para retonar informacoes
}

function dobro($num){

    return $num*2;
}

function media($nota1, $nota2){    
    //return ($nota1 * $nota2 ) / 2;
}

function media1($nota1 = 0, $nota2 = 0){    // se eu n definir parametros serao 0
    if ( !is_numeric($nota1) || !is_numeric($nota2)):  // verifica se e numerico se n for um nro ! usa esse p negacao
        return 'Informe valores numericos';
    endif;
    return ($nota1 + $nota2 ) / 2;
}