<html>
    <!-- Início do cabeçalho do site>   -->
    <head>
        <!-- Texto que ficará na aba do site -->
        <title>Lider</title>

        <!-- Charset caracteres latinos -->
        <meta charset="UTF-8">
        
        
        <!-- Inclui arquivo aula2css.css da pasta css -->
        <link rel="stylesheet" href="css/aula5css.css" >        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
        <style>
            
            .img-carrosel {
                height: 500px; 
                width: 100%;
                border-radius: 10px;
            }
            
        </style>


    </head>

    <!-- Início do corpo da página html -->
    <body>
    

        <!-- Divisão do topo onde ficará o menu superior -->
        <div class="topo">    <!-- qdo mudei de lugar com o conteudo-topo, a parte de  vermelha ficou cortada -->

            <!-- Divisão utilizada para afastar o conteúdo das bordas do navegador -->
            <div class="conteudo-topo">

                <div id="logo">
                    <div id="logo-claro"></div>    <!-- Logomarca preencherá espaço no fundo dessa divisão -->
                </div>

                <!-- Texto promocional -->
                <div id="texto-promocional" class="texto1"> RODOVIÁRIO LIDER <br>TRANSPORTADORA</div>

                   <!-- Informações para o usuário contratar o serviço -->
                   <div id="contrate">

                        <!-- Divisão para o telefone -->
                        <div id="telefone">
                            <label class="texto1">Ligue</label><br>
                            <label class="texto2">0800 723 4664</label><br>
                        </div>
 
                        <!-- Divisão para o botão -->
                        <div id="botao">
                            <button>Cadastrar</button>
                            <button>Fale Conosco</button>
                        </div>

                    </div>

                </div>

            </div>


        
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/imagem/Lider" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/imagem/imagem-fundo" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/imagem/Tela" alt="Terceiro Slide">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>

            </div>
        
        </div>
        <!-- Divisão onde ficará uma imagem promovendo uma série -->
        <!-- esse aqui é a figura do filme que preenche a tela <div id="slide"></div> -->

    </body>

</html>