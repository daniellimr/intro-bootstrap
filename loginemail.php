<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Login Santos" />
    <!-- <meta http-equiv="refresh" content=" 5 ;url=http://www.globo.com/"> -->

 <!--   <link rel="stylesheet" href="css/perfume1.css" >   -->
 <link rel="stylesheet" href="css/carou.css" >


</head>
<body bgcolor="white" text="blue" >

  
    <!-- Divisão do topo onde ficará o menu superior -->
    <div class="topo">   

        <!-- Divisão utilizada para afastar o conteúdo das bordas do navegador -->
        <div class="conteudo-topo">
    
            <h1 align="center"><b>Enviar Senha por e-mail</b></h1> 
        </div>

    </div>
  
<!--  <div class="container" >  -->
  
    <a class="links" id="paralogin"></a>
    
    <div class="content">      

      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        
        <form method="post" action="basic-carousel.html"> 
        <form method="post" action="cadastro.php"> 

            <br><br>
            <p align="center"> 
              <label for="email_login">E-mail</label>
              <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@email.com"/>
            </p>
             
            <div  align="center">
              <button type="button" onclick="Voltar()">Voltar</button>        
              <button type="submit" onclick="Logar()">Enviar</button>       
            </div>
        
        </form>





        <script type="text/javascript">

          function Voltar(){

              location.href="basic-carousel.html"

          }

          function Logar(){ 
              
            alert ("Email enviado com sucesso");
            location.href="basic-carousel.html"

          }
        </script>



      </div>
 

    </div>
  <!--</div> -->
 <br><br><br>
    <p align="center">
       Copyright @2020 - DMR - "Todos os direitos reservados"
    </p>
 
    <div class="roda">   
   
</div>   
             
</body>
</html>