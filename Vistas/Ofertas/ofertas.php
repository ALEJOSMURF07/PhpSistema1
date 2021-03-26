<%-- 
    Document   : ofertas
    Created on : 03-mar-2021, 21:21:32
    Author     : Bob
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="E-commerce Ropa Bebe" />
    <meta name="keywords" content="Ropa Bebe Niños Niñas" />
    <title>Nubecitas de colores</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="<?= media(); ?>css/parteEdwin/_10header.css" rel="stylesheet" type="text/css"/>
    <link href="<?= media(); ?>css/parteEdwin/_20menu.css" rel="stylesheet" type="text/css"/>
    <link href="<?= media(); ?>css/parteEdwin/_30nav.css" rel="stylesheet" type="text/css"/>
    <link href="<?= media(); ?>css/parteEdwin/_50section.css" rel="stylesheet" type="text/css"/>    
    <link href="<?= media(); ?>css/parteEdwin/ofertas_NB_css.css" rel="stylesheet" type="text/css"/>
    <link href="<?= media(); ?>css/parteEdwin/_70footer.css" rel="stylesheet" type="text/css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="script" href="js/index_NB_js.js">
</head>

<body>
    <header> <a href="tienda.jsp"> <img src="images/Logo.PNG" alt="Nubecitas de Colores"> </a>
        <div class="header__div">
            <h1>NUBECITAS DE COLORES</h1>
            <div>
                <ul class="header__div-ul">
                    <li><a href="categorias.jsp">Categorias<ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="subMenu">
                            <li><a href="">Ropa</a></li>
                            <li><a href="">Juguetes</a></li>
                            <li><a href="">Zapatos</a></li>
                        </ul>
                    </li>
                    <li><a href="loMasVisto.jsp">Lo mas visto</a></li>
                    <li><a href="ofertas.jsp">Ofertas</a></li>
                    <li><a href="seLesTrae.jsp">Se le trae</a></li>
                    <li><a href="">Mi configuración<ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="subMenu">
                            <li><a href="miConfiguracion.jsp">Mis Datos</a></li>
                            <li><a href="">Mis compras</a></li>
                            <li><a href="">Mis favoritos</a></li>
                            <li><a href="">PQRS</a></li>
                            <li><a href="index.jsp">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <script src="js/index_NB_js.js"></script>
    </header>
    <nav>
        <div>
            <ul class="nav__div-ul">
                <li><a href="">Categorias</li>
                <li><a href="">Lo mas visto</li>
                <li><a href="">Ofertas</li>
                <li><a href="">Se le trae</li>
                <li><a href="">Mi configuración</li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="h2">
            <h2>Ofertas solo por hoy</h2>
        </div>
        <div class="images">
            <div class="conten">
                <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/camiseta.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div>
                <h3>10% de descuento</h3> Aplica por compras mayores a 2 productos indistintamente en la adquisición de este producto tendrá el descuento. Las compras realizadas hasta antes de la media noche de hoy. <br><br>Aplican condiciones y restricciones. <br><br>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Suscipit non veniam repellendus vel. Consequatur sint neque facilis consequuntur non maxime quo magni sed necessitatibus blanditiis iste aspernatur molestiae, similique, nobis numquam provident odio, tempora ad repellendus ipsa eveniet repudiandae dignissimos! Repellat obcaecati nulla doloribus saepe quis ad hic excepturi neque sunt. Facere eveniet, numquam repudiandae sint recusandae vel, facilis molestiae! Fugit, aliquam soluta illum quasi recusandae necessitatibus adipisci delectus quae earum accusantium repudiandae dolore neque. Sequi nam, officia minima atque illum aliquam reiciendis tenetur saepe enim modi dolor nulla explicabo corrupti id maiores amet itaque dolores placeat cum magni voluptatum!
            </div>
            <div class="conten">
                <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/vestido.jpg"></a>
                    <ul>
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>
                </div> fsdafdkflas dk{fasdkasdfkfldksf lsdak fsadflñk añ Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed ullam, accusantium, molestias facere quos quas quaerat. Quia, praesentium ipsam consectetur ipsa provident! Nostrum rerum, placeat qui ea est tempora, saepe blanditiis, odio dignissimos, fugiat deserunt? Voluptatibus velit eaque eos. Modi architecto neque nostrum iusto vitae tempora repellendus unde ullam deserunt, et id nam hic pariatur odio inventore molestiae ex error similique accusamus voluptatem esse rerum dicta provident libero. Alias dolorum doloremque, unde sequi. Molestias, voluptate. Corporis, libero quaerat modi ipsum reprehenderit optio unde quas eveniet excepturi ea suscipit aut quae, possimus laudantium cupiditate aliquam expedita ad fuga velit. Accusantium, quia.
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/vestido.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/Pijama.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/camiseta.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/vestido.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/Pijama.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div> <!-- <div class="images"> <img src="images/Ropa de Bebe/camiseta.jpg" width="30%" height="30%" alt=""> <img src="images/Ropa de Bebe/Pijama.jpg" width="20%" height="20%" alt=""> <img src="images/Ropa de Bebe/vestido.jpg" width="20%" height="20%" alt=""> </div> -->
            <div class="cont"> <a class="section__a1" href="" id="link1"><img src="" id="imagen1"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a2" href="" id="link2"><img src="" id="imagen2"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a3" href="" id="link3"><img src="" id="imagen3"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/camiseta.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/vestido.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/Pijama.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/camiseta.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/vestido.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
            <div class="cont"> <a class="section__a1" href=""><img src="images/ropaBebe/Pijama.jpg"></a>
                <ul>
                    <li>nombreProducto</li>
                    <li>$ 35,000</li>
                </ul>
            </div>
        </div>
    </section>
    <footer>Derechos Reservados</footer>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>

</html>