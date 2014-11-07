<!DOCTYPE html>
<html>
    <head>
        <title><?php if (isset($this->titulo)) echo $this->titulo; ?></title>
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
                    <?php if (isset($_layoutParams['menu'])): ?>
                        <?php
                        if ($item && $_layoutParams['menu'][0]['id'] == $item) {
                            $_item_style = 'current';
                        } else {
                            $_item_style = '';
                        }

                        if ($item && $_layoutParams['menu'][1]['id'] == $item) {
                            $_item_style1 = 'current';
                        } else {
                            $_item_style1 = '';
                        }

                        if ($item && $_layoutParams['menu'][2]['id'] == $item) {
                            $_item_style2 = 'current';
                        } else {
                            $_item_style2 = '';
                        }

                        if ($item && $_layoutParams['menu'][3]['id'] == $item) {
                            $_item_style3 = 'current';
                        } else {
                            $_item_style3 = '';
                        }

                        if ($item && $_layoutParams['menu'][4]['id'] == $item) {
                            $_item_style4 = 'current';
                        } else {
                            $_item_style4 = '';
                        }
                        ?>
                        <!--Menu Inicio-->
                        <li id="<?php echo $_item_style; ?>" class="ini">
                            <a class="button" href="<?php echo $_layoutParams['menu'][0]['enlace'] ?>">
                                <div class="home"></div>
                                <div class="homeTxt hover"><?php echo $_layoutParams['menu'][0]['titulo'] ?></div>
                            </a>
                        </li>

                        <!--Menu Ventas-->
                        <li id="<?php echo $_item_style1; ?>" class="ven">
                            <a href="<?php echo $_layoutParams['menu'][1]['enlace'] ?>">
                                <img class="img_ventas" src="<?php echo $_layoutParams['ruta_img']; ?>menu/shop-xxl.png" width="30" height="30"/>
                                <div style="position: relative; margin-left: 40px;" class="hover"><?php echo $_layoutParams['menu'][1]['titulo'] ?></div>
                            </a>
                        </li>

                        <!--Menu Deudores-->
                        <li id="<?php echo $_item_style2; ?>" class="deu">
                            <a href="<?php echo $_layoutParams['menu'][2]['enlace'] ?>">
                                <img class="img_deudores" src="<?php echo $_layoutParams['ruta_img']; ?>menu/deudor-3-xxl.png" width="30" height="30"/>
                                <div style="position: relative; margin-left: 44px;" class="hover">Deudores</div>
                            </a>
                        </li>

                        <!--Menu Mantenimiento-->
                        <li id="<?php echo $_item_style3; ?>" class="man">
                            <img class="img_mantenimiento" src="<?php echo $_layoutParams['ruta_img']; ?>menu/config.png" width="30" height="30"/>
                            <div style="position: relative; margin-left: 45px;"><?php echo $_layoutParams['menu'][3]['titulo'] ?></div>
                            <!--Submenu mantenimiento-->
                            <ul>
                                <li class="segundoNi registro"><a href="<?php echo $_layoutParams['menu'][5]['enlace'] ?>"><?php echo $_layoutParams['menu'][5]['titulo'] ?></a></li>
                                <li class="segundoNi" id="lirepor">Reportes
                                    <!--Submenu Reportes-->
                                    <ul id="repor">
                                        <li class="rep" id="liventa">Ventas
                                            <!--Submenu reporte ventas-->
                                            <ul id="ventas">
                                                <li class="vent"><a href="<?php echo $_layoutParams['menu'][7]['enlace'] ?>"><?php echo $_layoutParams['menu'][7]['titulo'] ?></a></li>
                                                <li class="vent"><a href="<?php echo $_layoutParams['menu'][8]['enlace'] ?>"><?php echo $_layoutParams['menu'][8]['titulo'] ?></a></li>
                                                <li class="vent"><a href="<?php echo $_layoutParams['menu'][9]['enlace'] ?>"><?php echo $_layoutParams['menu'][9]['titulo'] ?></a></li>
                                            </ul>
                                        </li>
                                        <li class="rep"><a href="<?php echo $_layoutParams['menu'][6]['enlace'] ?>"><?php echo $_layoutParams['menu'][6]['titulo'] ?></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!--Menu Acerca de-->
                        <li id="<?php echo $_item_style4; ?>">
                            <a href="<?php echo $_layoutParams['menu'][4]['enlace'] ?>">
                                <img class="img_acerca" src="<?php echo $_layoutParams['ruta_img']; ?>menu/about-xxl.png" width="30" height="30"/>
                                <div style="position: relative; margin-left: 40px;" class="hover">Acerca de</div>
                            </a>
                        </li>
                    </ul>
                <?php endif; ?>
            </nav>    
            <br/>

            <?php

            function mes() {
                $mes = date("m");
                $meses = array(
                    '01' => 'Enero', 
                    '02' => 'Febrero', 
                    '03' => 'Marzo', 
                    '04' => 'Abril', 
                    '05' => 'Mayo', 
                    '06' => 'Junio', 
                    '07' => 'Julio', 
                    '08' => 'Agosto', 
                    '09' => 'Setiembre', 
                    '10' => 'Octubre', 
                    '11' => 'Noviembre', 
                    '12' => 'Diciembre'
                    );

                if ($meses[$mes]) {
                    return $meses[$mes];
                }
            }
            ?>
            <div class="content">
                <div id="izquierda" class="lateralIzq">
                    <div id="calendario">
                        <div class="cuerpo_calendario">
                            <span class="mes"><?php echo mes();?></span>
                            <span class="dia"><?php date_default_timezone_set('America/Lima'); echo date("d");?></span>
                        </div>