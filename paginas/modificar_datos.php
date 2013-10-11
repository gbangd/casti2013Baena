<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="../vistas/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vistas/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../vistas/css/main.css">

        <script src="../vistas/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
     
        <?php
            require_once("../paginas/productos.php");   
            $producto = new Productos();
            
             if(isset($_POST['id'])){
             
                $id = $_POST['id'];    
                $datos = $producto->buscar_por_id($id);
             
                if($producto->afectados())
                {
                    
                $vector_datos = mysql_fetch_array($datos);  
            ?>
                
        <form action="modificar.php" method="post">
                <div class="container">
                    <!--<h2 class="titulos">Buscar Articulo Por ID</h2>-->
                    <div class="form-group">
                      <label class="control-label">Codigo</label>
                      <input id="id" name="codigo" type="text" value="<?php print($vector_datos["codigo"]); ?>" class="input-sm form-control" required="">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Nombre</label>
                        <input id="id" name="nombre" type="text" value="<?php print($vector_datos["nombre"]); ?>"  class="input-sm form-control" required="">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Precio</label>
                        <input id="id" name="precio" type="text" value="<?php print($vector_datos["precioUnidad"]); ?>"  class="input-sm form-control" required="">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Cantidad</label>
                        <input id="id" name="cantidad" type="text" value="<?php print($vector_datos["stock"]); ?>"  class="input-sm form-control" required="">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Modificar</button>
                  </div>
                    <input type="hidden" name="id" value="<?php print($id); ?>"/>  
                </div>
                </form>
        
            <?php
                }else{
           ?>
        <form action="modificar_datos.php" method="post">
        <div class="container">
            <h2 class="titulos">Ese id no se encuentra registrado</h2>
            <div class="form-group">
              <label class="control-label" for="id">Id Articulo</label>
                <input id="id" name="id" type="text" placeholder="" class="input-sm form-control" required="">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
          </div>
        </div>
            </form>
        <?php } 
        
            }else{
        ?>
                
         <form action="modificar_datos.php" method="post">
        <div class="container">
            <!--<h2 class="titulos">Buscar Articulo Por ID</h2>-->
            <div class="form-group">
              <label class="control-label" for="id">Id Articulo</label>
                <input id="id" name="id" type="text" placeholder="" class="input-sm form-control" required="">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
          </div>
        </div>
             </form>
        <?php 
                }
                ?>
        
        
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../vistas/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

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
