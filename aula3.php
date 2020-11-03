<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="keywords" content="faculdade, ensino superior" />
    <!-- <meta http-equiv="refresh" content=" 5 ;url=http://www.globo.com/"> -->
</head>
<body bgcolor="white" text="blue" >
    <img src="./Lider.bmp">
    <h1 align="center"><b>Fale Conosco</b></h1>
    <hr size="2" width="100%" noshade>    <!-- traço-->
 
    <form action="pagina2.html" method="post">
    <br>
    <label>Nome Completo</label>
    <br>
    <input autofocus="" size="50" placeholder="Informe seu nome completo" type="text" name="nome" required>
    <br><br>
    <label for="email">E-mail</label>
    <br>
    <input type="email" name="email" placeholder="Informe seu email" size="45" value="" required>
    <br><br>
    <label for="estado">UF</label>
    <br>
 
    <select>
    <option value="" disabled selected>Informe seu estado</option>
    <option value="mg">Minas Gerais</option>
    <option value="rj">Rio de Janeiro</option>
    <option value="es">Espírito Santo</option>
    <option value="sp">São Paulo</option>
    </select>
    <br><br>
    <label for="cidade">Cidade</label>
    <br>
    <input type="text" name="cidade" value="" placeholder="Informe sua Cidade" required>
    <br><br>
    <label for="contato">Tipo de Contato</label>
    <br>
    <input type="radio" name="contato" value="M" checked>Reclamação
    <input type="radio" name="contato" value="M" checked>Dúvida

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

    <input type="checkbox" value="informa" checked>Deseja receber informações sobre novidades de nossa empresa?

    <br><br>

    <button type="submit">Voltar</button>                        <!-- botaoooo-->
    <button type="submit">Confirmar</button>        
    
    <!-- <input type="search" name="search"> -->
    <!-- <input type="url" name="url" required>  -->

    </form>
      

</body>
</html>


<!-- bgcolor cor do fundo, text cor da letra >

