<!DOCTYPE html>
<html>
    <head>
        <title><?php if(isset($this->titulo)) echo $this->titulo; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>estilos.css" type="text/css" rel="stylesheet"/>
        <link rel="icon" type="image/png" href="<?php echo $_layoutParams['ruta_img']; ?>favicon/favicon.ico"/>
        <script src="<?php echo $_layoutParams['ruta_js']; ?>query.js"></script>
        <script src="<?php echo $_layoutParams['ruta_js']; ?>script.js"></script>

    </head>
    <body>
        <div id="dvmaincontainer">

            <header>
                <div id="box">
                    <div id="box-imagen">
                        <a href=""><img src=""></a>
                    </div>
                </div>

            </header>  

            <nav>
                <ul>
                    <?php if(isset($_layoutParams['menu'])): ?>
                    <!--Menu Inicio-->
                    <li class="ini">
                        <a class="button" href="<?php echo $_layoutParams['menu'][0]['enlace'] ?>">
                            <div class="home"></div>
                            <div class="homeTxt"><?php echo $_layoutParams['menu'][0]['titulo'] ?></div>
                        </a>
                    </li>
                    
                    <!--Menu Ventas-->
                    <li class="ven">
                        <a class="button" href="<?php echo $_layoutParams['menu'][1]['enlace'] ?>">
                            <img class="img_ventas" src="<?php echo $_layoutParams['ruta_img']; ?>menu/shop-xxl.png" width="30" height="30"/>
                            <div style="position: relative; margin-left: 40px;"><?php echo $_layoutParams['menu'][1]['titulo'] ?></div>
                        </a>
                    </li>
                    
                    <!--Menu Deudores-->
                    <li class="deu">
                        <a class="button" href="<?php echo $_layoutParams['menu'][2]['enlace'] ?>">
                            <img class="img_deudores" src="<?php echo $_layoutParams['ruta_img']; ?>menu/deudor-3-xxl.png" width="30" height="30"/>
                            <div style="position: relative; margin-left: 44px;">Deudores</div>
                        </a>
                    </li>
                    
                    <!--Menu Mantenimiento-->
                    <li class="man">
                        <img class="img_mantenimiento" src="<?php echo $_layoutParams['ruta_img']; ?>menu/config.png" width="30" height="30"/>
                        <div style="position: relative; margin-left: 45px;"><?php echo $_layoutParams['menu'][3]['titulo']?></div>
                        <!--Submenu mantenimiento-->
                        <ul>
                            <li>
                            <a href="<?php echo $_layoutParams['menu'][5]['enlace'] ?>">Registro de Producto</a></li>
                            <li id="lirepor">Reportes
                                <!--Submenu Reportes-->
                                <ul id="repor">
                                    <li class="rep" id="liventa">Ventas
                                        <!--Submenu reporte ventas-->
                                        <ul id="ventas">
                                            <li class="vent"><a href="<?php echo $_layoutParams['menu'][6]['enlace'] ?>"> Semanales </a></li>
                                            <li class="vent"><a href="<?php echo $_layoutParams['menu'][7]['enlace'] ?>">Mensuales</a></li>
                                            <li class="vent"><a href="<?php echo $_layoutParams['menu'][8]['enlace'] ?>">Por Fecha</a></li>
                                        </ul>
                                    </li>
                                    <li class="rep"><a href="<?php echo $_layoutParams['menu'][9]['enlace'] ?>">Deudores</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <!--Menu Acerca de-->
                    <li>
                        <a class="button" href="<?php echo $_layoutParams['menu'][4]['enlace']?>">
                            <img class="img_acerca" src="<?php echo $_layoutParams['ruta_img']; ?>menu/about-xxl.png" width="30" height="30"/>
                            <div style="position: relative; margin-left: 40px;">Acerca de</div>
                        </a>
                    </li>
                </ul>
                <?php endif;?>
            </nav>    
            <br/>
            
            <div class="content">
                <div id="izquierda" class="lateralIzq">
                    <div id="calendario">
                        <div class="cuerpo_calendario">
                            <span class="mes">Octubre | 2014</span>
                            <span class="dia">16</span>
                        </div>
                        <div class="recordatorios">
                            <img class="recor" src="<?php echo $_layoutParams['ruta_img']; ?>calendar/campana.png" width="20" height="20"/>
                            Recordatorios