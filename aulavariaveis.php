<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <title>Aula 01</title>
</head>
<body>

    <?php
    // charset = para interpretar os caracteres especiais
    
    //-- Definicao de variaves
    $idade = 30;
    $idade2 = '30';
    $altura = 1.81;
    $nome = 'Danielli Mattos';
    $casado = true;

    // array
    $cadastro = array('Cliente1', 'Cliente2', 'Cliente3' );
    $cadastro2[] = 'Cliente1';
    $cadastro2[] = 'Cliente2';

    //-- posso definir os indices do array
    $cadastro3 = array('Cliente1' => 'Danielli', 'Cliente2' => 'Jose');
    
    // criando array dentro de array
    $cadastro4 = array(
            'cliente1' => array(
                'nome' => 'Danielli',
                'idade' => 30,
            ),    // , pq esta dividindo os itens do array principal
            'cliente2' => array(
                'nome0' => 'Jose',
                'idade' => 70,    // n precisa colocar , se n quiser
            ),
    );

    // escopo de variavel
    $numero = 50;

    function calc(){
        global $numero;    
        echo $numero;
    }
    // calc();

    // constantes - nao consegue alterar o valor 
    define('CONFIG', 1500 );   // define('CONFIG', 1500, TRUE ); TRUE  IGNORA MAIUSCULA E MINUSCULA
    //echo CONFIG;

    //var_dump(get_defined_vars());  // mostra variaveis
    //-----------------------------------------------------------//

    // print($idade);  //-- retorna 1
    // echo $idade;     //-- nao retorna nada usar echo p ser mais rapido

    // echo gettype($idade);   //-- extrai o tipo de dado que e a variavel
    // echo $idade + $idade2;   /-- php soma as variaveis 

    // echo "ola meu nome e $nome e eu tenho $idade";  //-- mostra o conteudo da variavel 

    // echo 'ola meu nome e $nome e eu tenho $idade';  //--  mostra o nome da variavel e nao o conteudo

    // echo 'ola meu nome e ' . $nome . 'e eu tenho ' . $idade;  //-- mostra o nome das variaveis

    // echo "olá meu nome e \"$nome\" e eu tenho \"$idade\"";  //-- Aparece os dados das variaveis entre aspas dupla

    // para ler o array nao tem como fazer com echo e sim var_dump
    // var_dump($cadastro);  // le o array
    // echo $cadastro[0];   // mostra o conteudo do array dessa posicao 0

    // echo $cadastro2[0]; 

    // var_dump($cadastro3);
    // echo $cadastro3['Cliente 2'];  // tem que referenciar qual o titulo que quer imprimir seu conteudo

    // var_dump($cadastro4);
    // echo $cadastro4['cliente1']['nome'];  // 2 parametro colocar o campo q quer imprimir

   
    $valor1 = 10;
    $valor2 = 5;
    $valor3 = '10';

    // var_dump( $valor1 == $valor2 );   // compara se os valores sao iguais
    // var_dump( $valor1 === $valor3 );  // compara se sao identicos como valor e tipo de variavel

    // comparacao .. operador ternario 
    // (expressao) ? ( valor verdadeirp) : ( valor falso);
    ($valor1 == $valor2) ? $resultado = true : $resultado = false;
    // var_dump($resultado);

    $sobrenome = ' Rodrigues';
    // echo $nome.$sobrenome;    // concatena variavel

    /* Assim
    
    if(expressao){
        comandos
    }elseif (expressao 2){
        comandos
    }else { 
        comandos
    }

    ou assim

    if(expressao):
        comandos
    elseif (expressao 2):
        comandos
    else:
        comandos
    endif;
    */
    
    $valor = 15;

    if($valor == 10):
        //echo "O valor e igual a 10";
    
    elseif ( $valor > 10 ):
        //echo "O valor e maior que 10";

    else:
        //echo "O valor e menos que 10";
    endif;
    
    $contador = 11;

    while ($contador <= 10):

        //echo $contador. ' ';
        $contador++;

    endwhile;

    // outra forma de fazer o while
    
    // primeiro executa o comando depois faz o teste
    $cont1 = 11;
    do{
        //echo $cont1. ' ';
        $cont1++;
    } while ($cont1 <= 10);


    // enquanto o num for menor ou igual a 10 incrementa o num em 1 e executa o comando
    // comparacao e incremento da variavel
    for( $num = 1; $num <= 10; $num++):
        // echo $num.' ';
    endfor;

    // para cada item de um array faca alguma coisa 
    $nome = array( 'Danielli', 'Leon', 'Olivia');

    // percorre os itens do array
    foreach( $nome as $item):
        //echo $item. ' ';
    endforeach;

    // criacao de array com chaves e valores
    $nome = array( 'nome1' => 'Danielli', 'nome2' => 'Leon', 'nome3' => 'Olivia');

    // chaves e valores do array
    foreach( $nome as $chave => $valor):
        // echo $chave.' = '.$valor. '<br />';
    endforeach;

    // alterne
    $valor = 15;
    switch($valor):
        case 10:
            //echo 'valor igual a 10';
            break; // ja foi atentido para
        case 15:
            //echo 'valor igual a 15';
            break;
        default:    // usado qdo nhuma condicao for atendida 
            //echo 'valor nao reconhecido';
    endswitch;

    // usando o break e continue
    for( $num = 1; $num <= 10; $num++):
        // echo $num.'<br />';
         // If ( $num == 5 ) break; // qdo for 5 para de rodar o for
         If ( $num == 5 ) continue; // qdo for 5 ele pula e continua rodando  o for
         echo $num.'<br />';  
    endfor;


    ?>

</body>
</html>    
