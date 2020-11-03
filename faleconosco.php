<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Fale Conosco" />
    <!-- <meta http-equiv="refresh" content=" 5 ;url=http://www.globo.com/"> -->
    
    <link rel="stylesheet" href="css/perfume1.css" >

</head>

<body bgcolor="white" text="blue" >
 
    
     <!-- Divisão do topo onde ficará o menu superior -->
     <div class="topo">   

        <!-- Divisão utilizada para afastar o conteúdo das bordas do navegador -->
        <div class="conteudo-topo">

        <!--        <link href="aula1css.css" rel="stylesheet">    chama o css -->
        <!-- <link rel="stylesheet" href="css/perfume1.css" >   -->

            <!-- <img src="./Lider.bmp">   --> 
            <h1 align="center"><b>Fale Conosco</b></h1>
            <!--    <hr size="2" width="100%" noshade>    --> <!-- traço-->

        </div>

    </div>



<!--    <hr size="2" width="100%" noshade>     traço-->
 

<!-- <form action="basic-carousel.html" method="post">  -->
<!-- <form action="login.html" method="post">  -->


<div>

    <br>
    <label align="center" >Nome Completo</label>
    <br>
    <input align="center" autofocus="" size="50" placeholder="Informe seu nome completo" type="text" name="nome" required>
    <br><br>
    <label align="center" for="email">E-mail</label>
    <br>
    <input align="center" type="email" name="email" placeholder="Informe seu email" size="45" value="" required>
    <br><br>
    <label align="center" for="estado">UF</label>
    <br>
 
    <select align="center">
    <option value="" disabled selected>Informe seu estado</option>
    <option value="mg">Minas Gerais</option>
    <option value="rj">Rio de Janeiro</option>
    <option value="es">Espírito Santo</option>
    <option value="sp">São Paulo</option>
    </select>
    <br><br>
    <label for="cidade">Cidade</label>
    <br>
    <input type="text" name="cidade" value="" placeholder="Informe sua Cidade" >
    <br><br>
    <label for="contato">Tipo de Contato</label>
    <br>
    <input type="radio" name="contato" value="D" checked>Dúvida
    <input type="radio" name="contato" value="R" checked>Reclamação

    <!--   <input type="number" name="num" id="num" min="1" max="15" step="1">    incremento qdo escolhemos mais de 1 produto-->
 
    <!--   <input type="range" name="range" id="range" min="1" max="10">          barrinha de rolagem horizontal -->

    <!-- <input type="color" name="gcolor" id="gcolor">                          campo para seleção das cores -->

    <!-- <input type="datetime" name="gdate" id="gdate" value="2020-10-30T10:05:32:00Z" >   -->
    
    <!--  <input type="datetime-local" name="gdatetimelocal" id="gdatetimelocal" value="2020-10-30T10:05:32:00" >  apresenta data e hr p escolher -->

    <!-- <input type="month" name="gmonth" id="gmonth" value="2020-10" >    mostra mes e o ano outubro de 2020 -->

    <!-- <input type="month" name="gmonth" id="gmonth" value="2020-W03" >  seleciona e aparece o mes de ano   -->

    <!-- <input type="time" name="gtime" id="gtime" value="" >             mostra a hora ou seleciona -->

<!--
    <select>
    <option value="" disabled selected>Selecione uma opção</option>
    <option value="mas">Masculino</option>
    <option value="fem">Feminino</option>
    </select>

combo para seleção 
-->

    
    <br><br>
    <label for="mensagem">Mensagem</label>                         <!-- como faço para colocar em cima ????  -->
    <br>
    <textarea name="gtextarea" id="gtextarea" placeholder="Digite aqui detalhes a respeito do seu contato" rows="5" cols="50"></textarea>      <!-- campo memo -->
    <br><br>

<!-- TIREI ESSE  <input type="checkbox" value="informa" checked>Deseja receber informações sobre novidades de nossa empresa?  -->

 <!--
    <button type="button" onclick="Voltar()">Voltar</button>                        botaoooo
    <button type="submit" onclick="Confirmar()">Confirmar</button>            
       -->
  

    <!-- <input type="search" name="search"> -->
    <!-- <input type="url" name="url" required>  -->

    <button  align="center" type="button" onclick="Voltar()" >Voltar</button>                        <!-- botaoooo-->
    <button  align="center" type="submit" onclick="Confirmar()">Confirmar</button>        
   
 

</div>
<br><br> 
    
<!-- <div id="logo-footer"></div> -->

    <script type="text/javascript">
    
        function Voltar(){

            /*DESCOBRIR COMO FAZ PARA VOLTAR P A TELA ANTEIOR*/
            location.href="basic-carousel.html"

        }
        
        function Confirmar(){ 
             
            alert("Sua mensagem foi enviada com sucesso!"); 
            location.href="basic-carousel.html"
        }

    </script>


        <p align="center">
            Copyright @2020 - DMR - "Todos os direitos reservados"
        </p>
        <div class="roda">   


</body>

</html>


<!-- bgcolor cor do fundo, text cor da letra >

