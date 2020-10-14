<?php

 
/* diferenca e a forma que cada uma trata o erro
include se o arquivo nao for encontrado ele da o aviso do erro mas continua a execucao
ja o require ele para no erro
*/

// include('funcoes.php');         // informa o nome do arquivo
include_once('funcoes.php');       // inclui apenas 1 vez o arquivo
// require('funcoes.php');        
// require_once('funcoes.php');    // inclui apenas 1 vez    

// echo teste();                   // pega o resultado da funcao e printa na telas

$retorno = teste();                // retorno recebe o retorno da funcao
// echo $retorno;

//echo dobro(28);                    // traz o valor 50
dobro(28);

//echo media(7,8);

//echo media1(7,'8');
media1(7,'8');

if (function_exists('raiz')) raiz();   // verifica se a funcao existe antes de executar ela

//var_dump(function_exists('raiz'));    // retorna falso pq n existe
var_dump(function_exists('media'));     // retorna true pq existe

