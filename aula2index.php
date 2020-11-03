<?php
if(isset($_POST['campo1'])) $campo1 = $_POST['campo1'];  // para ve o resultado na tela
//echo $campo1;
//var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Envido de dados via GET e POST</title>
</head>
<body>
    <form action="" method="post">  
        <p><input type="text" name="campo1"></p>
        <p><input type="submit" name="enviar"></p>
    </form>
</body>
</html>


<?php
//var_dump($_GET);

/*
obs esta no funcoes <form action="funcoes.php" method="post">  chama os dados da funcao


$acao = $_GET('acao');
$id = $_GET('id');

switch ($acao):
    case 'excluir':
      //  echo 'excluir um registro do banco de dados ' . $id;
    break;

    default:
        //<div id="code" class=""></div>
    break;
endswitch; */


// verifica se tem registro sendo realmente passado
// trata e recebe os dados passados na url
/*(isset($_GET['acao'])) ? $acao = $_GET('acao') : $acao = null;
if (isset($_GET['id'])) $id = $_GET('id');

switch ($acao):
    case 'excluir':
        echo 'excluir um registro do banco de dados ' .$id;
    break;

    default:
       echo 'Nenhuma acao foi tomada';
    break;
endswitch; */
