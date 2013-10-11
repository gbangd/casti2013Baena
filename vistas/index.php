<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-right navbar-fixed-top" id="flotante">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand texto-menu" href="#"> Gest-Articulos App >>&nbsp;</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#">Quienes Somos</a></li>
            <li><a href="#">Contactenos</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
          <div class="col-lg-7">  
            <h1>Gestion de Articulos!</h1>
            <p>Administra eficientemente los productos de la base de datos de tu empresa.</p>
            <p><a class="btn btn-primary btn-lg">Aprende más &raquo;</a></p>
        </div>
          <div class="col-lg-4">
              <img src="img/logotipoupbgrande.gif" class="responsive" width="391" height="149" style="margin-top: 36px"/>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Buscar por ID</h2>
          <p> 
              Permite buscar un articulo dentro de la base de datos de su empresa, utilizando solamente el numero de identificacion que esta asociado a dicho articulo. Esta funcionalidad esta disponible desde la version <i style="color:blue; font-weight: bold">1.8</i> de nuestra aplicacion. 
          </p>
          <div class="container">
              <div class="row">
                  <div class="span12">
                      <div class="accordion" id="myaccordion1">
                          <div class="accordion-group">
                              <div class="accordion-heading">
                                  <a class="accordion-toggle btn btn-default" data-toggle="collapse" data-parent="#myaccordion1" href="#first1">
                                      Ir a la Funcionalidad >>
                                  </a>
                              </div>
                              <div id="first1" class="accordion-body collapse">
                                  <div class="accordion-inner">
                                      <iframe src="../paginas/buscar_por_id.php" style="border:none; height: 350px; width: 100%">
                                          
                                      </iframe>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-lg-4">
          <h2>Filtrar por Cantidad y Precio</h2>
          <p>
              Devuelve una lista de datos de acuerdo con los parametros establecidos con respecto a el precio y la cantidad de un producto especifico de la base de datos. Esta funcionalidad esta disponible desde la version <i style="color:blue; font-weight: bold">1.7</i> de nuestra aplicacion.
          </p>
          
          <div class="container">
              <div class="row">
                  <div class="span12">
                      <div class="accordion" id="myaccordion">
                          <div class="accordion-group">
                              <div class="accordion-heading">
                                  <a class="accordion-toggle btn btn-default" data-toggle="collapse" data-parent="#myaccordion" href="#first">
                                      Ir a la Funcionalidad >>
                                  </a>
                              </div>
                              <div id="first" class="accordion-body collapse">
                                  <iframe src="../paginas/filtar_precio_cantidad.php" style="border:none; height: 350px; width: 100%">
                                          
                                    </iframe>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
       </div>
        <div class="col-lg-4">
          <h2>Modificar Articulos</h2>
          <p>
              Permite actualizar o cambiar cada uno de los atributos de un producto que ha sido registrado con anterioridad en la base de datos de la empresa. Esta funcionalidad esta disponible desde la version <i style="color:blue; font-weight: bold">1.3</i> de nuestra aplicacion.
          </p>
          <div class="container">
              <div class="row">
                  <div class="span12">
                      <div class="accordion" id="myaccordion2">
                          <div class="accordion-group">
                              <div class="accordion-heading">
                                  <a class="accordion-toggle btn btn-default" data-toggle="collapse" data-parent="#myaccordion2" href="#first2">
                                      Ir a la Funcionalidad >>
                                  </a>
                              </div>
                              <div id="first2" class="accordion-body collapse">
                                  <div class="accordion-inner">
                                      <iframe src="../paginas/modificar_datos.php" style="border:none; height: 430px; width: 100%">
                                          
                                      </iframe>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Carlos Castilla - UPB 2013</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
