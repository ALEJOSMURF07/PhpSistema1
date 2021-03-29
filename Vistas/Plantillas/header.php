<!--
<!DOCTYPE html>

<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> </title>	
        <link href="../../Recursos/css/parteEdwin/style_1.css" rel="stylesheet" type="text/css"/>
        <link href="/_10header.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss(); ?>/_10headerFavoritos.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss(); ?>/_20menu.css" rel="stylesheet" type="text/css"/>
-->    
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['page_tag'];?></title>
    <link rel="stylesheet" href="<?= mediaEdwincss(); ?>/styles.css">
    <link href="<?= mediaEdwincss(); ?>/loMasVisto_NB_css.css" rel="stylesheet" type="text/css"/>
    <script src="<?= mediaEdwinjs(); ?>/index_NB_js.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <input type="checkbox" id="check">
    
    <header>
        <a href="tienda.html">
            <img src="<?= mediaEdwinimages(); ?>/Logo1.png" href="tienda.html" alt="Nubecitas de Colores">
        </a>
        <div class="header__div">
            <h1>NUBECITAS DE COLORES</h1>
            <div>
                <ul class="header__div-ul">
                    
                    <li><a href="categorias.html">Categorias<ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="subMenu">
                            <li><a href="">Ropa</a></li>
                            <li><a href="">Juguetes</a></li>
                            <li><a href="">Zapatos</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php base_url(); ?>loMasVisto">Lo mas visto</a></li>
                    <li><a href="ofertas.html">Ofertas</a></li>
                    <li><a href="seLesTrae.html">Se le trae</a></li>
                    <li><a href="">Mi configuración<ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="subMenu">
                            <li><a href="">Mis Datos</a></li>
                            <li><a href="">Mis compras</a></li>
                            <li><a href="">Mis favoritos</a></li>
                            <li><a href="">PQRS</a></li>
                            <li><a href="index.html">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

<?php require_once ('nav.php'); ?>;