<html>
    <head>
        <title>Sonne J - Modelo de Datos no encontrado!</title>
        <link href="<?php echo BASE_URL.'public/css/';?>error.css" type="text/css" rel="stylesheet"/>
        <link rel="icon" type="image/png" href="<?php echo BASE_URL.'public/img/favicon/favicon.ico'?>"/>
        <script language="Javascript">
            function disableselect(e) {
                return false
            }
            function reEnable() {
                return true
            }
            document.onselectstart = new Function("return false")
            if (window.sidebar) {
                document.onmousedown = disableselect
                document.onclick = reEnable
            }
        </script>
    </head>

    <body>
    <center>
        <div class="container">
            <div><img src="<?php echo BASE_URL.'public/img/';?>sadboy.png"/></div>
            <div class="texto">Oops!</div>
            <div class="texto contenido">Modelo de datos no encontrada...</div>
            <br/>
            <div><a class="retornar" href="<?php echo BASE_URL;?>">Retornar al Directorio Principal</a></div>
        </div>
    </center>
    </body>
</html>

