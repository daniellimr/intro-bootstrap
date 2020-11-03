<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        
        <title>Teste Dani</title>
        
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
    <body>

        <header class="container-fluid">

 

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Lider</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>   -->

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Cliente
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  
                  <!--
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                  -->
                </ul>


               
                   <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logar</button>
                  </form>
                                
              </div>


              
              <!-- colocando os botões e o telefone  -->
              <div id="contrate"> 

                  <!-- Divisão para o botão -->
                  <div id="botao"> 
                      
                      <label class="texto1">Ligue 0800 723 4664</label><br>   <!-- Tirei a divisão para o telefone -->
                      <button>Cadastrar</button>
                      <button>Fale Conosco</button>
                  </div>

              </div>



            </nav>
            


            
<!--            <div id="telefone">  
                 <label class="texto1">Ligue 0800 723 4664</label><br>
              </div>     -->

        </header>
            
        <div class="container">
        
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/imagem/Lider" class="d-block w-100 img-carrosel" alt="" />
                </div>
                <div class="carousel-item">
                  <img  src="/imagem/Lider" class="d-block w-100 img-carrosel" alt=""/>
                </div>
                <div class="carousel-item">
                  <img  src="/imagem/Tela" class="d-block w-100 img-carrosel" alt=""/>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>            
            
        </div>
        
    </body>
</html>
