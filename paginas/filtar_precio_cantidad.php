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
     
          <table class="table table-striped">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        <?php
            require_once("../paginas/productos.php");   
            $producto = new Productos();
            
          
             $resultados = $producto->filtrar_cantidad_precio(); // primero precio y despues stock
                while($vector_datos = mysql_fetch_array($resultados)){    
             ?>
                <tr>
                    <td><?php print($vector_datos["codigo"]); ?></td>
                    <td><?php print($vector_datos["nombre"]); ?></td>
                    <td><?php print($vector_datos["precioUnidad"]); ?></td>
                    <td><?php print($vector_datos["stock"]); ?></td>
                </tr>
            <?php 

                } 
                
           ?>
          </table>
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
