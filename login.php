<!DOCTYPE html>
<html lang="pt">
  <head>       
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Legendas - Login&Cadastro</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="ps-loading">
        <div class="header--sidebar"></div>
    <header class="header">
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index.html"><img src="images/logo.png" alt=""></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                  <li class="menu-item menu-item-has-children dropdown"><a href="index.html">HOME</a>
                        <ul class="sub-menu">
                          <li class="menu-item"><a href="index.html">Homepage #1</a></li>
                          <li class="menu-item"><a href="#">Homepage #2</a></li>
                          <li class="menu-item"><a href="#">Homepage #3</a></li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">LEGENDAS</a>
                  </li>
                  <li class="menu-item"><a href="#">SÉRIES</a></li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">FAÇA PARTE</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.html">Blog-grid</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="blog-grid.html">Blog Grid 1</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                </ul>
                          </li>
                          <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Contato</a>
                        <ul class="sub-menu">
                          <li class="menu-item"><a href="contact-us.html">Contact Us #1</a></li>
                          <li class="menu-item"><a href="contact-us.html">Contact Us #2</a></li>
                        </ul>
                  </li>
                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Search">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
        <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p></p>
                </div>
          </div>
        </div>
      </div>
    </header>
    <main class="ps-main">
      <div class="ps-banner">
        </div>
       <div class="ps-section--offer">
        <div class="ps-column"><div class="ps-home-contact">
        <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
        <div class="ps-home-contact__form">
          <header>
            <h3>Entrar</h3>
          </header>
          <article>
            <form action="loginUsuario.php" method="post">
              <div class="form-group">
                <label>E-mail<span>*</span></label>
                <input class="form-control" type="text" name="email" placeholder="youremail@email.com">
              </div>
              <div class="form-group">
                <label>Senha<span>*</span></label>
                <input class="form-control" type="password" name="senha" placeholder="password">
              </div>
                <div class="form-group">
						<input type="submit" value="Login" class="btn login_btn">
					</div>
            </form>
              <div class="card-footer">
				<div class="d-flex links">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
          </article>
        </div>
      </div>
          </div>
           <div class="ps-column"><div class="ps-home-contact">
        <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
        <div class="ps-home-contact__form">
          <header>
            <h3>Cadastre-se</h3>
          </header>
          <article>
            <form action="cadastroUsuario.php" method="post">
              <div class="form-group">
               <input type="text" class="form-control" name="user" placeholder="Please, insert your username" />
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Please, insert your emmail account"/>
              </div>
                <div class="form-group">
                <input type="password" id="password1" class="form-control password1" name="senha" placeholder="Please, insert your password"/>
              </div>
                <div class="form-group">
                <input type="password"  id="password2" class="form-control password2" name="confirm_Senha" placeholder="Please, confirm your password"/>
              </div>
                <div class="form-group">
						<input type="submit" value="Create account" class="btn login_btn">
					</div>
            </form>
          </article>
        </div>
               </div></div>
           </div>
    <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
        <div class="ps-footer__copyright">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <p>&copy; <a href="#">Legendas</a>. Todos os direitos reservados. </p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <ul class="ps-social">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
        </main>
    <!-- JS Library-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>