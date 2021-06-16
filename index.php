<!DOCTYPE html>
<html>

<head>
  <title>$Dev[Mobal]</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.html">$Dev[Mobal]</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">Sobre nós</a></li>
          <li><a href="#services">Serviços</a></li>

<?php
  session_start();
  if (!empty($_SESSION["id"])) {
?>

          <li><a href="#usuario">Usuario</a></li>

<?php  }else{ ?>

          <li><a href="#cadastro">Cadastro</a></li>
          <li><a href="#login">Login</a></li>

<?php  } ?>

        </ul>
      </div>
    </div>
  </nav>

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="img/intro/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">$Dev[Mobal]</h2>
                <p class="animated fadeInUp">Uma nova forma de digitalizar seu negócio</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Saiba mais</a>
              </div>
            </div>
          </div>
          
          <!-- Slide 2 -->
          <div class="item">
            <div class="carousel-background"><img src="img/intro/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">A tecnologia na sua mão</span></h2>
                <p class="animated fadeInUp">Digitalize e leve seu produto a todos os lados do mundo.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Saiba mais</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="item">
            <div class="carousel-background"><img src="img/intro/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Agilidade e criatividade</span></h2>
                <p class="animated fadeInUp"> Tenha o nosso time ao lado do seu negócio.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Saiba mais</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon fa fa-angle-left" aria-hidden="true"></span>
          <span class="sr-only">Voltar</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon fa fa-angle-right" aria-hidden="true"></span>
          <span class="sr-only">Avançar</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <!-- About -->
  <section id="about" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Sobre nós</h2>
            <div class="heading-line"></div>
            <p>A estrada por um propósito.</p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 about-img">
          <img src="img/about-img.jpg" alt="">
        </div>

        <div class="col-md-6 content">
          <h2>“Não se trata de ter ideias, mas sim de levar essas ideias para a vida real.”</h2>
          <h3>Scott Belsky, cofundador do Behance</h3>
          <p>
            A $Dev nasce do sonho de dois jovens de fazer diferente, aplicar o conhecimento conquistado na formação para transformar negócios.
            Durante a pandemia do ano de 2020 o primeiro passo foi dado, depois de mais de um ano de conversa a $Dev saiu do papel com um propósito:
            digitalizar comércios e levar tecnologia para quem ainda não está competindo no mercado digital.
            Agilidade, criatividade, Vigor e Juventudo... Palavras que definem todos que fazem parte desta grande família.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 1 -->
  <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <h2 class="wow bounceInDown" data-wow-delay="0.5s">O digital já faz parte do mundo!</h2>
            <p class="lead wow bounceInUp" data-wow-delay="1s">Quebre fronteiras com a $Dev</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Serviços</h2>
            <div class="heading-line"></div>
            <p>Onde nossa equipe pode potencializar o seu negócio</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-service" class="service carousel slide">

            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Criação de sistemas</h4>
                      <p>Sitemas personalizados para o seu negócio, digitalize seus processos.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="img/screenshots/1.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Criação de comércio digital</h4>
                      <p>Tenha clientes onde você quiser, faça seu comércio quebrar fronteiras</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="img/screenshots/2.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Aplicativos Mobile</h4>
                      <p>Crie seus próprios aplicativos, e tenha um serviço personalizado</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="img/screenshots/3.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-service" data-slide-to="1"></li>
              <li data-target="#carousel-service" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  if (!empty($_SESSION["id"])) {
?>

    <!-- Usuario -->
 
  <section id="usuario" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Acesse os dados do seu usuário!</h2>
            <div class="heading-line"></div>
            <a href="scripts/usuario.php">Clique aqui!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  }else{
?>

<!-- Cadastro -->
 
<section id="cadastro" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>CADASTRO</h2>
            <div class="heading-line"></div>
            <p>Faça seu cadastro!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <form action="scripts/cadastro.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
            <!-- nome -->
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome" data-rule="minlen:4"/>
                <div class="validation"></div>
              </div>
            </div>
            <!-- email -->
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <!-- telefone -->
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Seu Telefone"/>
                <div class="validation"></div>
              </div>
            </div>
            <!-- rua -->
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua"/>
                <div class="validation"></div>
              </div>
            </div>
            <!-- nº -->
            <div class="col-md-offset-2 col-md-2">
              <div class="form-group">
                <input type="number" class="form-control" name="numero" id="numero" placeholder="Nº"/>
                <div class="validation"></div>
              </div>
            </div>
            <!-- complemento -->
            <div class="col-md-offset-1 col-md-5">
              <div class="form-group">
                <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento"/>
                <div class="validation"></div>
              </div>
            </div>
            <!-- CEP -->
            <div class="col-md-offset-2 col-md-3">
              <div class="form-group">
                <input type="number" class="form-control" name="cep" id="cep" placeholder="CEP"/>
                <div class="validation"></div>
              </div>
            </div>
            <!-- cidade -->  
            <div class="col-md-offset-1 col-md-4">
              <div class="form-group">
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" data-rule="minlen:4"/>
                <div class="validation"></div>
              </div>
            </div>
            <!-- foto -->  
            <div class="col-md-offset-3 col-md-6">
              <div class="form-group">
                Foto:<input type="file" class="form-control" name="foto" id="foto"/>
                <div class="validation"></div>
              </div>
            </div>
            <!-- senha -->
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" data-rule="minlen:8"/>
                <div class="validation"></div>
              </div>
            </div>
            <!-- enviar -->
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <input type="submit" name='Enviar' class="btn btn-theme btn-lg btn-block"/>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section> 

  <!-- Login -->
 
  <section id="login" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>LOGIN</h2>
            <div class="heading-line"></div>
            <p>Faça seu login!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <form action="scripts/login.php" method="post" class="form-horizontal" role="form">
            <!-- email -->
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <!-- senha -->
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" data-rule="minlen:8"/>
                <div class="validation"></div>
              </div>
            </div>
            <!-- enviar -->
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <input type="submit" name='Enviar' class="btn btn-theme btn-lg btn-block"/>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>

<?php
  }
?> 

  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Número</h5>
            <p>
              +55 (51) 996301414

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email</h5>
            <p>
              devmobal@gmail.com
            </p>
          </div>
        </div>
      </div>
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>Nos siga nas redes sociais</h5>
          <ul class="social-network">
            <li><a href="https://www.instagram.com/devmobal/">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; $Dev[Mobal]</p>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="js/custom.js"></script>

</body>

</html>
