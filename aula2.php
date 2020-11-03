<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="keywords" content="faculdade, ensino superior" />
    <!-- <meta http-equiv="refresh" content=" 5 ;url=http://www.globo.com/"> -->
</head>
<body bgcolor="white" text="blue" >

<link href="aula1css.css" rel="stylesheet">    <!-- chama o css -->

    <img src="./Lider.bmp">
    <h1 align="center"><b>CADASTRO</b></h1>
    <hr size="2" width="100%" noshade>    <!-- traço-->
 
    <form action="pagina2.html" method="post">
    <br>
    <label>Nome</label>
    <input autofocus="" size="50" placeholder="Digite aqui o Nome" type="text" name="nome" required>
    <br><br>
    <label for="endereco">Endereco</label>
    <input autocomplete="on" type="text" name="endereco" value="" required> 
    <label for="nro">Nro</label>
    <input  autocomplete="on" type="text" name="nro" value="" size="01" maxlenght required> 
    <br><br>
    <label for="bairro">Bairro</label>
    <input  autocomplete="on" type="text" name="bairro" value="" required> 
    <br><br>
    <label for="cidade">Cidade</label>
    <input type="text" name="cidade" value="" required>
    <label for="estado">Estado</label>
    <input type="text" size="01" name="estado" value="" required>
    <br><br>
    <label for="cep">Cep</label>
    <input type="text" name="cep" size="07" value="" required>
    <br><br>
    <label for="tel">Telefone</label>
    <input type="ddd" name="ddd" id="ddd" size="01" value="" required>
    <input type="tel" name="tel" id="tel" size="08" value="" required>
    <br><br>
    <label for="email">E-mail</label>
    <input type="email" name="email" size="45" value="" required>
    <br><br>
    <label for="nasc">Data Nasc.</label>
    <input type="date" name="nasc" id="nasc" value="date">
    <br><br>
    <label for="sexo">Sexo</label>
    <input type="radio" name="sexo" value="M" checked>Masculino
    <input type="radio" name="sexo" value="M" checked>Feminino 
    <input type="radio" name="sexo" value="M" checked>Outros

    <hr size="2" width="100%" noshade>    <!-- traço-->       
    <br>
    <label for="senha">Senha</label>
    <input type="password" size="10" maxlength="20" name="senha" value="" required>    <!--   ***-->       
    <br><br>
    <label for="senha2">Confirmar Senha</label>
    <input type="password" size="10" maxlength="20" name="senha2" value="" required>
    <hr size="2" width="100%" noshade>    <!-- traço-->       
    <br>

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

    <label for="senha">Obs.</label>                         <!-- como faço para colocar em cima ????  -->
    <br>
    <textarea name="gtextarea" id="gtextarea" rows="5" cols="50"></textarea>      <!-- campo memo -->
    <br><br>
    <button type="submit">Voltar</button>                        <!-- botaoooo-->
    <button type="submit">Confirmar</button>        
    
    <!-- <input type="search" name="search"> -->
    <!-- <input type="url" name="url" required>  -->

    </form>
      

</body>
</html>


<!-- bgcolor cor do fundo, text cor da letra >

