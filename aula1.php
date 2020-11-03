<!DOCTYPE html>
<html>
<head>
    <title>Perfumes</title>
    <meta charset="utf-8">
    <meta name=“keywords” content=“faculdade, ensino superior” />
    <!-- <meta http-equiv="refresh" content=" 5 ;url=http://www.globo.com/"> -->
</head>
<body bgcolor=“red” text=“blue” >
    <img src="./Lider.bmp">
    <h1 align="center"><b>Perfumes</b></h1>
    <hr size=“2” width=“100%” noshade>
    <h2 align="center">Seja bem vindo!</h2>
    <p align="center">
        Empresa para te atender.
    </p>    
    <ul>
        <li><b>Confira nossos preços.</b></li>
        <li>Receba informações por email.</li>
        <li>Navegue por todo site.</li>
        <li>Compre sem sair de casa.</li>
    </ul>



    <form action=“pagina2.html” method=“post”>
    <h1>Nome</h1>
    <input type="text" name="nome" required>
    <h2>Sobrenome</h2>
    <input autofocus=""  placeholder="Digite aqui o Nome" type="text" name="sobrenome" value="" required>
    <br><br>
    <label for="endereco">End</label>
    <input  autocomplete="on" placeholder="end" type=“text” name=“endereco” value=""  required> 
    <br><br>

    <input type=“submit” name=“bairro”  value=“Enviar”>
    <br><br>
    <input type=“text” name=“email” value="">
    <br><br>
    <input type=“reset” name=“telefone” value=“Limpar”>
    <br><br>
    <input type=“button” value=“click aqui”>
    <br><br>
    <input type=“checkbox” value=“Masculino” checked> 
    <br><br>
    <input type=“file”>
    <input type=“password” maxlength=“20”>

    <button type=“submit” >Enviar</button> <!-- botaoooo-->
    
    </form>
    <ul type=“square”>
        <li>Elemento 1
            <ul>
                <li>Elemento 1.1</li>
            </ul>
        </li>
    </ul>
    <ol type=“A” start=“3”>
        <li>Item 1
            <ol>
                <li>Item 1.1</li>
         </ol>
        </li>
        <li>Item 2</li>
    </ol>
    <dl>
    <dt>HTML</dt>
        <dd>Hiper Text Markup Language</dd>
    </dl>
    <i>Texto em itálico</i>
    <hr size=“2” width=“100%” noshade>
    <em>Texto EM</em>
    <br>
    <strong>Texto STRONG</strong>
    <br>
    <small>Texto SMALL</small>
    <sup>Texto SUP</sup>
    <sub>Texto SUB</sub>
    <br>
    <ins>Texto INS</ins>
    <del>Texto DEL</del>
    <br>
    <code>
        <?php echo "Ola Mundo" ?>
    </code>
    <br>
    <kbd>del</kbd>
    <br>
    <var>int x = 0;</var>
    <br>
    <pre>Texto com 
    quebra de linha PRE</pre>
    <abbr>HTML ABBR</abbr>
    <address> Pça. Annina Besegna, 40</address>
    <br><bdo dir=“ltr”>Texto BDO</bdo>
    <br><blockquote>Citação de um texto BLOCKQUOTE</blockquote>
    <q>Citação Q</q>
    <br><br>
    <br><dfn>Definição DFN</dfn>
    <br> 
 
    <a href=index.php>Clique aqui</a>
    <a name=“topo”></a>


    <table border=“1”>
    <br>
    <tr>
        <th colspan="3">TABELA DE CONTAS E SALARIOS</th>
    </tr>
    <tr>
        <td>Tipo de Despesa</td>
        <td>Descrição</td>
        <td>Valor</td>
    </tr>
    <td rowspan="4">Doméstica</td>
        <td>Aluguel</td>
        <td>100,00</td>
    <tr>
       <td>Compras do Mes</td>
       <td>200,00</td>
    </tr>        
        <td>Luz</td> 
        <td>100,00</td>    
    <tr>
        <td>Água</td>
        <td>80,00</td>
    </tr>
    <tr>    
        <td rowspan="2">Externa</td>
        <td>Gasolina</td> 
        <td>180,00</td>  
    <tr>
        <td>Almoço</td>
        <td>80,00</td>
    </tr>
    <tr>    
        <td colspan="2" align="right"><b>Sub-Total</b></td>
        <td>740,00</td>
    </tr>
</table>

</body>
</html>


<!-- bgcolor cor do fundo, text cor da letra >

