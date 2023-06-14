<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="images/favicon-32x321.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="images/favicon-16x161.png" sizes="16x16" />
  <title>Barbearia Grupo 09</title>
  <!--stylesheet-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="styles/styles.css" rel="stylesheet" type="text/css">
  <link href="styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">

  <!--scripts-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/all-plugins.js"></script>
  <script type="text/javascript" src="scripts/plugins-activate.js"></script>
</head>
<script type="text/javascript">
$(document).ready(function(){
     $('.telefone').mask("(99) 99999-9999");
});
</script>

<style>
.row {
  margin: auto;
}
.row p{
  margin: 10px;
  padding: 5px;
}

@media (max-width: 474px) { 
  .btn-primary {
    margin-top:10px;
  }
  
 };
</style>
<body id="page-top">
  <!-- Navigation -->
  <div class="logo">
    <i aria-hidden="true"><span>Barbearia Grupo 09</span></i>
  </div>
  <a class="menu-toggle rounded" href="#">
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="smooth-scroll" href="#Header"></a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Portfolio">Cortes Recentes</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Servico">Unidades</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#barbeiros">Barbeiros</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Contact">Agendamento</a>
      </li>
      <li class="sidebar-nav-item">
        <a href="logar.php">Logar</a>
      </li>
    </ul>
  </nav>
  <style></style>
  <!-- Header Starts -->
  <section id="Banner" class="content-section">
    <div class="container content-wrap text-center">
      <h1 data-scrollreveal="enter top over 1.5s after 0.1s">Sistema de Agendamento</h1>
      <h3 data-scrollreveal="enter bottom over 1.7s after 0.3s">
        <em>Seja bem-vindo ao nosso sistema de agendamento</em>
      </h3>
      
      <a class="btn btn-primary btn-xl smooth-scroll" href="#Portfolio">Cortes recentes</a>
      <a class="btn btn-primary btn-xl smooth-scroll" href="#Servico">Agendar</a>
      <a class="btn btn-primary btn-xl" href="logar.php">Sou funcionario</a>
    </div>
    <div class="overlay"></div>
  </section>
  <!-- Header Ends -->
  <!-- About Us Starts -->
  <section class="content-section text-center" id="Portfolio">
    <div class="container">
      <div class="block-heading">
        <h2>Opções de Cortes</h2>
      </div>
      <div class="portfolio-wrapper clearfix">
        <a class="each-portfolio" data-fancybox="gallery" href="images/corteum02.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/corteum02.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Corte Degradê</h5>
              <p class="p-desc">Nos últimos tempos, o corte degradê, que também é conhecido como fade, ganhou a atenção dos homens que buscam um visual moderno. Para chegar nesse estilo de cabelo curto masculino, as laterais devem ser raspadas ou mais baixas que o topo da cabeça, formando justamente o efeito de degradê.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/corteum03.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/corteum03.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Corte americano</h5>
              <p class="p-desc">A tendência do momento é o corte americano, que nada mais é do que a variação de um corte baixo masculino clássico, o militar. A diferença está nas possibilidades: alto, médio, baixo ou disfarçado, as opções são as mais diversas para quem quer estar hype sem perder a versatilidade.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/corteum04.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/corteum04.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Corte do Jaca</h5>
              <p class="p-desc">Cabelo na régua e sombreado perfeito são as melhores características para descrever o corte do jaca. Democrático, ele combina com todos os tipos de cabelo e ainda pode receber estilizações, como riscos, desenhos e reflexos alinhados.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/corteum05.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/corteum05.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Repicado</h5>
              <p class="p-desc">Para quem quer deixar os fios curtos, mas nem tanto, sugerimos que faça um dos cortes de cabelo feminino curto repicado na tesoura. Isso vai ajudar a deixar os visual leve e com movimento.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/corteum06.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/corteum06.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Corte militar</h5>
              <p class="p-desc">Também conhecido como "Pompadour", o corte militar é outra opção de cortes de cabelo curto masculino certeira para quem busca praticidade no dia a dia. O estilo recebe esse nome porque foi popularizado pelos soldados americanos nos anos 30. Não há como negar que é um charme!</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/corteum07.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/corteum07.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Falso moicano ou Fohawk</h5>
              <p class="p-desc">O corte escolhido pelos punks dos anos 70 e 80 sustentava uma crista enorme no topo da cabeça enquanto o restante era totalmente raspado, já esta versão mais comportada tem as laterais bem baixas e o volume do topo modelado de maneira a lembrar a versão clássica, mas sem ser tão extremo.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- Servicos -->
  <section id="Servico" class="content-section text-center">
    <div class="container">
      <div class="block-heading">
        <h2>Unidades</h2>
        <p>Escolha uma de nossas unidades!</p>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
            <a href="#Contact">
              <div class="service-icon yellow">
                <div class="front-content">
                  <i class="fa fa-globe" aria-hidden="true"></i>
                  <h3>telêmaco borba</h3>
                </div>
              </div>
              <div class="service-content">
                <h3></h3>
                <p>Clique para agendar</p>
              </div>
          </div> </a>
        </div>
        <div class="col-md-3 col-sm-6" >
          <div class="service-box">
              <div class="service-icon orange">
                <div class="front-content" >
                  <i class="fa fa-globe"></i>
                  <h3>Curitiba</h3>
                </div>
              </div>
              <div class="service-content">
                <h3></h3>
                <p>Opção indisponível</p>
              </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box ">
              <div class="service-icon red">
                <div class="front-content">
                  <i class="fa fa-globe" aria-hidden="true"></i>
                  <h3>Ponta Grossa</h3>
                </div>
              </div>
              <div class="service-content">
                <h3></h3>
                <p>Opção indisponível</p>
              </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
              <div class="service-icon grey">
                <div class="front-content">
                  <i class="fa fa-globe"></i>
                  <h3>Guarapuava</h3>
                </div>
              </div>
              <div class="service-content">
                <h3></h3>
                <p>Opção indisponível</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="barbeiros" class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="block-heading">
            <h2>Barbeiros</h2>
            <p>Conheça um pouco sobre nossos barbeiros</p>
          </div>
          <div id="customers-testimonials" class="owl-carousel">
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/barbearialogo4.png" alt="">
                <p>Tempo de experiencia: 5 anos <br> especialidade: Corte Americano </p>
              </div>
              <div class="testimonial-name">Flavio</div>
            </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/barbearialogo4.png" alt="">
                <p>Tempo de experiencia: 2 anos <br> especialidade: Degradê ou Fade </p>
              </div>
              <div class="testimonial-name">Marciano</div>
              </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/barbearialogo4.png" alt="">
                <p>Tempo de experiencia: 4 anos <br> especialidade: Corte do Jaca </p>
              </div>
              <div class="testimonial-name">Diego</div>
              </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/barbearialogo4.png" alt="">
                <p>Tempo de experiencia: 3 anos <br> especialidade: Repicado </p>
              </div>
              <div class="testimonial-name">Caroline</div>
              </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/barbearialogo4.png" alt="">
                <p>Tempo de experiencia: 1 anos <br> especialidade: Corte Militar </p>
              </div>
              <div class="testimonial-name">Patrik</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END OF TESTIMONIALS -->
  <section id="Contact" class="content-section">
    <div class="container">
      <div class="block-heading">
        <h2>Agendar Corte</h2>
        <p>Preencha todos os campos para agendar seu corte</p>
      </div>
      <div>
        <form action="php/cadAgend.php" method="post" style="box-shadow: 0 20px 50px rgba(8, 112, 184, 0.7);background-color: white; padding:15px; border-radius: 15px; width: 330px; margin:0 auto;">
          <div class="row" style="align-items: center;">
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Seu nome</label>
              <input type="nome" name="nome" placeholder="seu nome" required class="form-control" id="inputEmail4">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            <labelfor="inputPassword4" class="form-label">Celular</label>
            <input type="text" class="telefone form-control field" required name="telefone" placeholder="(00) 00000-0000" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label">Data</label>
              <input id="datetime" name="data" required type="date" class="form-control"/>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label">Escolha um horario</label>
              <div class="row" required>
              <p ><input style="margin:0 3px;" type="radio" name="hora" value="10:00" />10:00</p> 
              <p><input style="margin:0 3px;"  type="radio" name="hora" value="11:00" />11:00</p> 
              <p><input style="margin:0 3px;"  type="radio" name="hora" value="12:00" />12:00</p> 
              <p><input style="margin:0 3px;"  type="radio" name="hora" value="13:00" />13:00</p> 
              <p><input style="margin:0 3px;"  type="radio" name="hora" value="14:00" />14:00</p> 
              <p><input style="margin:0 3px;"  type="radio" name="hora" value="15:00" />15:00</p> 
              <p><input style="margin:0 3px;"  type="radio" name="hora" value="16:00" />16:00</p> 
              
              <p><input style="margin:0 3px;"  type="radio" name="hora" value="17:00" />17:00</p> 
              </div>
              <div class="row">
              <p><input style="margin:0 3px;"  type="radio" name="hora" value="18:00" />18:00</p> 
              <p><input style="margin:0 3px;"  type="radio" name="hora" value="19:00" />19:00</p> 
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label">Escolha um de nossos barbeiros</label>
              <?php 
              include 'php/conexao.php';
              $result = $conn->query("select * from barbeiro");
              while ($row = $result->fetch_object()) {
                echo '
                <tr>
                    <p><input style="margin:0 3px;"  type="checkbox" name="barbeiro" value="'.$row->nome.'" />'. $row->nome . '</p>      
                  </tr>
            ';
            }

              ?>
            </div>
          </div>

          <div class="row" style="margin-top: 15px; display:flex; justify-content: center;">
            <div class="submit-btn ">
              <button type="submit" value="enviar">Agendar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
  </section>
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="https://www.whatsapp.com/">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="https://www.instagram.com/barbeariafederal61/">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div>
  </footer>

  
  <script src="js/jquery-.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/anim.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script>
$(document).ready(function(){
     $('.telefone').mask("(99) 99999-9999");
});
</script>
</body>
</html>