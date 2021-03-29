<!DOCTYPE html>

<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar Dashboard Template</title>
     <link rel="stylesheet" href="<?= mediaEdwincss(); ?>/style.css"> 
     <link href="../../Recursos/css/parteEdwin/style_1.css" rel="stylesheet" type="text/css"/>
     <link href="<?= mediaEdwincss() ?>/seLeTrae_NB_css.css" rel="stylesheet" type="text/css"/>
     <link href="<?= mediaEdwincss(); ?>/_10header.css" rel="stylesheet" type="text/css"/>
    <link href="<?= mediaEdwincss(); ?>/_20menu.css" rel="stylesheet" type="text/css"/>
    <link href="<?= mediaEdwincss(); ?>/_30nav.css" rel="stylesheet" type="text/css"/>
    <link href="<?= mediaEdwincss(); ?>/_50section.css" rel="stylesheet" type="text/css"/>
    <link href="<?= mediaEdwincss(); ?>/_51tarjetas.css" rel="stylesheet" type="text/css"/>
    <link href="<?= mediaEdwincss(); ?>/_70footer.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>


<body>
    <header>
        <a href="tienda.jsp">
            <img src="<?= mediaEdwinimages(); ?>/Logo1.png" alt="Nubecitas de Colores">
        </a>
        <div class="header__div">
            <h1>NUBECITAS DE COLORES</h1>
            <div>
                <ul class="header__div-ul">
                    <li><a class="active" href="#">Principal</a>
                    <li><a href="">Categorias<ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="subMenu">
                            <li><a href="">Ropa</a></li>
                            <li><a href="">Juguetes</a></li>
                            <li><a href="">Zapatos</a></li>
                        </ul>
                    </li>
                    <li><a href="loMasVisto">Lo mas visto</a></li>
                    <li><a href="ofertas">Ofertas</a></li>
                    <li><a href="seLeTrae">Se le trae</a></li>
                    <li><a href="">Mi configuración<ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="subMenu">
                            <li><a href="miConfiguracion">Mis Datos</a></li>
                            <li><a href="">Mis compras</a></li>
                            <li><a href="">Mis favoritos</a></li>
                            <li><a href="">PQRS</a></li>
                            <li><a href="index">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    
    <nav>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="mobile_nav">
            <div class="nav_bar">
                <i class="fa fa-bars nav_btn" id="lanzarAlerta"></i>
            </div>
            <div class="mobile_nav_items">
                <a href="tienda"><i class="fas fa-desktop"></i><span>Principal</span></a>
                <a href="nosotros"><i class="fas fa-cogs"></i><span>Nosotros</span></a>
                <a href=""><i class="fas fa-table"></i><span>Categorias</span></a>
                <a href="loMasVisto"><i class="fas fa-th"></i><span>loMasVisto</span></a>
                <a href="ofertas"><i class="fas fa-info-circle"></i><span>Ofertas</span></a>
                <a href="miConfiguracion"><i class="fas fa-sliders-h"></i><span>${usuario.nombreUsuario}</span></a>
            </div>
        </div>
    </nav>

    <section>
        <div class="content">
            <div class="images">
                <div class="cont">
                    <a class="section__a1" href=""><img src="../images/ropaBebe/camiseta.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="../images/ropaBebe/vestido.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="../images/ropaBebe/Pijama.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="../images/ropaBebe/camiseta.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="../images/ropaBebe/vestido.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="../images/ropaBebe/Pijama.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>                
                
                <div class="cont">
                    <a class="section__a1" href=""><img src="../images/ropaBebe/camiseta.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="../images/ropaBebe/vestido.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="../images/ropaBebe/Pijama.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="images/ropaBebe/camiseta.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="images/ropaBebe/vestido.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="images/ropaBebe/Pijama.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>Derechos Reservados</footer>
</body>

</html>