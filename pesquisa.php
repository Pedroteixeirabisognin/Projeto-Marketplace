<?php

  //Verifica se existe algo na variável
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;


?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="Venda suas patentes">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Invector</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form method="post" action="php/dao/verificar_login.php" class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Login" class="form-control" required  name="login_verifica">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" required placeholder="Password" name="senha_verifica">
            </div>
            <button type="submit" class="btn btn-success">Logar</button>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Cadastre-se</button>
            <?php
              if ($erro == 1) {
                echo "Usuário ou senha inválido(s)";
              }

            ?>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
<!--TELA CADASTRO-->

      <div class="container text-black">

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cadastro</h4>
              </div>
              <div class="modal-body">
                <form action="php/dao/dao_conta_cadastro.php" method="post">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nome</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" required placeholder="Nome" name="login">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required placeholder="Password" name="senha">
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" required class="form-check-input">
                      Eu declaro que sou maior de idade.
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>
  <!--/TELA CADASTRO-->
    <!-- Main jumbotron for a primary marketing message or call to action -->
            
      <!--Filtro-->
      <section id="pesquisa" >
        <div class="container" >
          <div class="row">
            <div class="col-md-4" >

              <span>
                <h2 align="center" style="padding-top: 100px; padding-bottom: 40px;">Filtro</h2>
              </span>
              <span>
                <form>
                  <div class="form-group">
                    <label for="exampleInputText">Patente</label>
                    <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Insira nome ou número da patente">
                    
                  </div>
                  <div>
                    <label for="exampleSelect1">Area</label>
                    <select class="form-control" id="exampleSelect1">
                      <option>Domésticos</option>
                      <option>Automotivos</option>
                      <option>Barcos</option>
                      <option>Brinquedos</option>
                      <option>Lazer</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
              </span>
            </div>

            <div class="col-md-8" >


            	<!-- Anúncios -->
            	<div class="container container-special" style="margin-top: 30px; padding-top: 30px; padding-left: 10px; background-color: white; width: 600px; height: 200px; color: black;">
            		<div class="col-md-4" >
            			
            			<!-- AQUI PUXARÁ IMG1 UM PARÊMTRO EM PHP UMA DAS IMAGENS DO ANÚNCIO -->
            			<img src="img/background.jpg" width="100px" height="100px">
            		</div>
            		<div class="col-md-8" >
            			 <!-- AQUI RECEBERÁ UM PARAMETRO PUXADO PELO BANCO EM PHP -->
            		     <p>Mussum Ipsum, cacilds vidis litro abertis. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Cevadis im ampola pa arma uma pindureta. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis.</p>	
            		</div>

            	</div>

      </section>
      <!-- CONTEÚDO -->

      <footer id="rodape">
        <div class="container">
          <div class="row">

            <!--Imagem Rodapé-->           
            <div class="col-md-4 " >
             <img class="img-responsive" src="img/light-bulb-icon_34400.png">
            </div>

            <!--Texto-->
            <div class="col-md-8 teste-borda" >
              <div class="col-md-6" style="padding-top: 100px;">

                <h2>Sobre a empresa</h2>

                <ul>
                  <li>Endereço: XXXXXXXXX</li>
                  <li>Telefone: (XX) XXXXX - XXXX</li>
                </ul>  

              </div>
              <div class="col-md-6" style="padding-top: 100px;">

                <h2>Links úteis</h2>

                <ul>
                  <li><a href="http://www.inpi.gov.br/">INPI</a></li>
                  <li><a href="www.facebook.com">Facebook</a></li>
                </ul>  


              </div>

            </div>
          </div>

        </div>        



      </footer>    

    </div> <!-- /container -->        
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        
    </body>
</html>
