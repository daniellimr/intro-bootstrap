<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Login Santos" />
    <!-- <meta http-equiv="refresh" content=" 5 ;url=http://www.globo.com/"> -->

    <!--<link rel="stylesheet" href="css/perfume1.css" >  -->
    <link rel="stylesheet" href="css/carou.css" >

</head>
<body bgcolor="white" text="blue" >


    <!-- Divisão do topo onde ficará o menu superior -->
    <div class="topo">   

        <!-- Divisão utilizada para afastar o conteúdo das bordas do navegador -->
        <div class="conteudo-topo">
    
            <h1 align="center"><b>IDENTIFICAÇÃO</b></h1> 
        </div>

    </div>


    <div class="container footer-info">
      <span class="last-access ico-screen"><strong>Último acesso: </strong><?php echo date( 'd-m-Y H:i:s', time()) ?></span>
    </div>

    <div class="box-parent-login">
	<div class="well bg-white box-login">
<!--		<form>  -->     <!--  role="form"> -->
	<!--		<fieldset>    -->
 
    <br>
    			<div align="center"class="form-group ls-login-user">
					<label for="userLogin">Usuário</label>
					<input class="form-control ls-login-bg-user input-lg" id="userLogin" type="text" aria-label="Usuário" placeholder="Usuário">
				</div>
                <br>
				<div align="center" class="form-group ls-login-password">
					<label for="userPassword">Senha</label>
					<input class="form-control ls-login-bg-password input-lg" id="userPassword" type="password" aria-label="Senha" placeholder="Senha">
				</div>
                <br>
				<p align="center"><a href="loginemail.php" class="ls-login-forgot">Esqueci minha senha</a></p>
                <br><br>
<!-- <input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block"> -->
                <div  align="center">                
                    <button align="center" type="button" onclick="Voltar()">Voltar</button>        
                    <button align="center" type="submit" onclick="Logar()">Logar</button>    
                    <br>
                </div>

				<p align="center" class="txt-center ls-login-signup">Não possui usuário? <a href="cadastro.php"> Faça seu Cadastro</a> 
                  <!--  <a href="#">Cadastre-se agora</a>
                    <p align="center"><a href="cadastro.php">Faça seu Cadastro</a> </p>-->
                </p>
                <br><br>
 
     <!--       </fieldset>    -->

  <!--      </form>  -->
        

        
    <!--        <div id="logo-footer"></div>    -->

 
 
    </div>
</div>


<script type="text/javascript">

function Voltar(){

    location.href="basic-carousel.html"

}

function Logar(){ 
    
    /* alert("logado realizado com sucesso!"); */
    alert("Logado com sucesso!"); 
    location.href="basic-carousel.html"

}
</script>

<p align="center">
       Copyright @2020 - DMR - "Todos os direitos reservados"
    </p>
<div class="roda">   
    
</div>   

</body>
</html>