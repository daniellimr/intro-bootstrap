<?php
if(isset($_POST['enviar'])):
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    if (mail('danimattos001@gmail.com', $assunto, $mensagem, 'From: '.$email)):
        $aviso = 'Email envido com sucesso';
    else:
        $aviso = 'Erro ao enviar email';
    endif;
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Envio de dados via GET e POST</title>
</head>
<body>
    <?php if(isset($aviso)) echo $aviso; ?>
    <form action="" method="post">  
        <p><label for="">Nome:</label><input type="text" name="nome"></p>
        <p><label for="">Email:</label><input type="text" name="email"></p>
        <p><label for="">Assunto:</label><input type="text" name="assunto"></p>
        <p><label for="">Mensagem:</label><textarea name="mensagem" id="" cols="30" rows="10"></textarea></p>
        <p><input type="submit" name="enviar"></p>
    </form>
</body>
</html> 