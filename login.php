<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Login Santos" /> 

    
<!--    <link rel="stylesheet" href="css/telalogin.css" >   -->

    <link rel="stylesheet" href="css/perfume.css" >

</head>

<body bgcolor="white" text="blue" >
  
  <!-- Divisão do topo onde ficará o menu superior -->
  <div class="topo">   

    <!-- Divisão utilizada para afastar o conteúdo das bordas do navegador -->
    <div class="conteudo-topo">

        <h1 align="center"><b>Login</b></h1> 

      </div>

  </div>

  <div class="container footer-info">
    <span class="last-access ico-screen"><strong>Último acesso: </strong><?php echo date( 'd-m-Y H:i:s', time()) ?></span>
  </div>

  <div class="container" >
  
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      

      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        
        <form method="post" action=""> 
            
            <br><br>
            <p> 
              <label for="email_login">E-mail</label>
              <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@email.com"/>
            </p>
            
            <p> 
              <label for="senha_login" >Senha</label>
              <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" /> 
            </p>
            
            <!--  <p> 
              <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
              <label for="manterlogado">Manter-me logado</label>
            </p>   -->
            
            <button type="submit" onClick="Voltar()">Voltar</button>        
            <button type="submit" onClick="Logar()">Logar</button>       
            
            <p class="link">
              <a href="#" class="ls-login-forgot">Esqueci minha senha</a>
              <br> Ainda não tem conta?
              <a href="cadastro.php">Cadastre-se</a>
            </p>
        
        </form>
      </div>

    </div>
  </div> 



  <p align="center">
       Copyright @2020 - DMR - "Todos os direitos reservados"
    </p>
<div class="roda">   

</body>
</html>