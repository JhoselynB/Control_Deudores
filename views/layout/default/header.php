<!DOCTYPE html>
<html lang=''>
    <head>
        <title><?php if (isset($this->titulo)) echo $this->titulo; ?></title>
        <meta charset='utf-8'>
        <link href="<?php echo $_layoutParams['ruta_css']; ?>style_default.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="main">
            <div id="header">
                <h1><?php echo APP_NAME ?></h1>
            </div>
            
            <div class="top_menu">
                <ul>
                    <?php if(isset($_layoutParams['menu'])):?>
                    <?php for($i = 0; $i < count($_layoutParams['menu']); $i++):?>
                    <li>
                        <a href="<?php echo $_layoutParams['menu'][$i]['enlace']?>"><?php echo $_layoutParams['menu'][$i]['titulo'];?></a>
                    </li>
                    <?php endfor;?>
                    <?php endif;?>
                </ul>
            </div>