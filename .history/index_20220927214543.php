<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/alertify.core.css" rel="stylesheet" type="text/css">
    <link href="css/alertify.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/funciones.js" type="text/javascript"></script>
    <script src="js/alertify.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <title>Equipo 7</title>
</head>
<style>
    body{
        background:url(img/fondo.jpg);
        background-repeat: no-repeat;
        background-size: cover; 
    }
</style>
<body>
    <br>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark " id="Nav">
            <a class="navbar-brand" href="#"><font color ="White" size="3">SERVICIOS DE TI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>
            <!--apartado menu-->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <a class="nav-link" href="#" id="menuInicio" style="color: white;">
                    <span class="fas fa-home"></span>Inicio</a>
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" style="color: white;">
                            <i class="fas fa-pen-alt"></i> Primer corte
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" id="menuTrabajdosEquipoC1"><i class="fas fa-book-open"></i> Trabajos en equipo </a>
                            <a class="dropdown-item" href="#" id="menuLuisC1"><i class="fas fa-bookmark"></i> Luis Antonio de Jes??s L??pez </a>
                            <a class="dropdown-item" href="#" id="menuLaloC1"><i class="fas fa-bookmark"></i> Eduardo F??lix Alba </a>
                            <a class="dropdown-item" href="#" id="menuChoryC1"><i class="fas fa-bookmark"></i> David Gonz??lez Mart??nez </a>
                            <a class="dropdown-item" href="#" id="menuAlexC1"><i class="fas fa-bookmark"></i> Jos?? Alex Reyes Juar??z </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="color: white;">
                            <i class="fas fa-pen-alt"></i>Segundo Corte
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
                            <a class="dropdown-item" href="#" id="menuTrabajdosEquipoC2"><i class="fas fa-book-open"></i> Trabajos en equipo </a>
                            <a class="dropdown-item" href="#" id="menuLuisC2"><i class="fas fa-bookmark"></i> Luis Antonio de Jes??s L??pez </a>
                            <a class="dropdown-item" href="#" id="menuLaloC2"><i class="fas fa-bookmark"></i> Eduardo F??lix Alba </a>
                            <a class="dropdown-item" href="#" id="menuChoryC2"><i class="fas fa-bookmark"></i> David Gonz??lez Mart??nez </a>
                            <a class="dropdown-item" href="#" id="menuAlexC2"><i class="fas fa-bookmark"></i> Jos?? Alex Reyes Juar??z </a>
                        </div>
                    </li>
                    </li>
                        <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="color: white;">
                            <i class="fas fa-user-graduate"></i> Tercer Corte
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
                            <a class="dropdown-item" href="#" id="menuTrabajdosEquipoC3"><i class="fas fa-book-open"></i> Trabajos en equipo </a>
                            <a class="dropdown-item" href="#" id="menuLuisC3"><i class="fas fa-bookmark"></i> Luis Antonio de Jes??s L??pez </a>
                            <a class="dropdown-item" href="#" id="menuLaloC3"><i class="fas fa-bookmark"></i> Eduardo F??lix Alba </a>
                            <a class="dropdown-item" href="#" id="menuChoryC3"><i class="fas fa-bookmark"></i> David Gonz??lez Mart??nez </a>
                            <a class="dropdown-item" href="#" id="menuAlexC3"><i class="fas fa-bookmark"></i> Jos?? Alex Reyes Juar??z </a>
                        </div>
                    </li>
                    
                </ul>
            </div>
            <!--Fin Menu-->   
        </nav>
        <br>
        <div class="row" id="divInicio">
            <div class="col-12" style="text-align: center;">
                <br>
                <h1 class="animate__animated animate__backInLeft"><font color="#5D6D7E" size="7" >
                    <b>Bienvenido </b></font></h1>
            </div>
        </div>
        <div class="row" id="divtrabajosequipoC1" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3 text-align: center;"><font color="white" size="6">Trabajos en equipo del primer corte </font></h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators3" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" href="trabajos_equipo/Casos_de_estudio.pdf"  width="900" height="8000" alt="500%x180" src="img/casos.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Casos de estudio</h4>
                                                        <p class="card-text" style="color:black;">Descripcion.</p>
                                                        <a href="trabajos_equipo/Casos_de_estudio.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/glosario.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Glosario</h4>
                                                        <p class="card-text" style="color:black;">Descripcion.</p>
                                                        <a href="trabajos_equipo/Glosario.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/cuadro_com.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Cuadro Comparativo</h4>
                                                        <p class="card-text" style="color:black;">Descripcion.</p>
                                                        <a href="trabajos_equipo/Cuadro_comparativo.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/cuadro_com.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Caso Pr??ctico</h4>
                                                        <p class="card-text" style="color:black;">Descripcion.</p>
                                                        <a href="trabajos_equipo/" class="btn btn-primary">PENDIENTE</a>
                                                    </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosLuisC1" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3">Trabajos individuales de Luis Antonio de Jesus Lopez </h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" href="" alt="100%x280" src="img/fotos_luis/alineacion.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Alineacion de los objetivos de las tecnologias</h4>
                                                        <p class="card-text" style="color:black;">Estrategia del servicio que define directrices para el dise??o, desarrollo e implementaci??n de la gestion del servicio  como un recurso estrategico (ITIL).</p>
                                                        <a href="trabajos_indi/individual_luis/1.4 alineaci??n de los objetivos de las tecnolog??as en la informaci??n.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_luis/bpm.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Fundamentos de gestion de negocios</h4>
                                                        <p class="card-text" style="color:black;">Su objetivo es mejorar el desempe??o de la organizaci??n a trav??s de la gesti??n de los procesos de negocio.</p>
                                                        <a href="trabajos_indi/individual_luis/Fundamentos de gesti??n de negocios (BPM).pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_luis/mapa.jpg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Mapa Conceptual</h4>
                                                        <p class="card-text" style="color:black;">Se trata sobre los modelos de negocio que implementas las empresas as?? como sus sistemas de informaci??n y sus tecnolog??as actuales y como influye en sus ventas, clientes, control de inventario etc.</p>
                                                        <a href="trabajos_indi/individual_luis/mapa conceptual.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_luis/video.jpg">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Reportes de videos</h4>
                                                        <p class="card-text" style="color:black;">Se da a conocer sobre las TICS, que son, para que sirven, de que se componen de los cuales pueden ser el software, el hardware y el internet, as?? como la descripci??n de los tipos de software, la clasificaci??n del hardware y unos conceptos acerca de que es el internet y a web.</p>
                                                        <a href="trabajos_indi/individual_luis/reporte de videos.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/fotos_luis/vs.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Compra tradicional vs e-commerce</h4>
                                                    <p class="card-text" style="color:black;">Comparaci??n del antes y el despu??s de la implementan de las TICS en empresas en como era antes su gestion con el ahora.</p>
                                                    <a href="trabajos_indi/individual_luis/Compra tradicional vs e-commerce.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/fotos_luis/ti.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Evaluacion de los servicios de TI</h4>
                                                    <p class="card-text" style="color:black;">Consiste en los m??todos y t??cnicas para evaluar los sistemas de Ti ya se a a nivel personal o empresarial y como hacerlo.</p>
                                                    <a href="trabajos_indi/individual_luis/Apunte 1.5 Evaluacion de los servicios de TI" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosLaloC1" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3">Trabajos individuales de Eduardo Felix Alba </h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators4" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_eddy/mapa.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Tecnologias de la informacion</h4>
                                                        <p class="card-text" style="color:black;">las tecnolog??as de la informaci??n son t??cnicas m??todos y procesos que se usan para la producci??n de bienes o servicios o en el logro de objetivos, como la investigaci??n cient??fica enfocado a los modelos de negocios.</p>
                                                        <a href="trabajos_indi/individual_eddy/Tecnolog??as de la Informaci??n.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_eddy/vs.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Compra tradicional vs e-commerce</h4>
                                                        <p class="card-text" style="color:black;">la innovaci??n del uso de las tecnolog??as nos permite avanzar creando o innovando servicios de comunicaci??n o de captura de informaci??n para hacer m??s f??cil la comunicaci??n.</p>
                                                        <a href="trabajos_indi/individual_eddy/Actividad.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_eddy/fundamentos.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Fundamentos de gesti??n de negocios</h4>
                                                        <p class="card-text" style="color:black;">se le llama as?? por el proceso de negocio que se enfoca a mejorar el desempe??o eficacia y eficiencia de la organizaci??n a trav??s de la gesti??n de proceso de negocio</p>
                                                        <a href="trabajos_indi/individual_eddy/Fundamentos de gesti??n de negocios.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/ti.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Evaluaci??n de los Servidores de TI</h4>
                                                        <p class="card-text" style="color:black;">en esta evaluaci??n puede enfocarse en 2 puntos: los personales y empresarial donde ambos llevan una serie de paso para llegar a un objetivo especifico para una evaluaci??n de las necesidades de TI.</p>
                                                        <a href="trabajos_indi/individual_eddy/Evaluaci??n de los Servidores de TI.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/fotos_eddy/ti.png">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Alineaci??n de los servicios de tecnolog??as</h4>
                                                    <p class="card-text" style="color:black;">hace referencia a las estrategias, objetivos y puntos para determinar oportunidades de crecimiento as?? como desarrollar planes que garanticen el procedimiento a las competencias futuras.</p>
                                                    <a href="trabajos_indi/individual_eddy/Alineaci??n de los servicios de tecnolog??as.pdf" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                            </div>
                                        </div>
                                

                        </div>
                    </div>
                </div>
            </div>
        </div>
            </section>
        </div>

        <div class="row" id="divtrabajosChoryC1" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3">Trabajos individuales de David Gonzalez Martinez </h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators5" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators5" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" href="trabajos_equipo/Casos_de_estudio.pdf" alt="100%x280" src="img/fotos_dav/1.4 alineacion.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Alineacion de los objetos de las tecnologias de la informacion</h4>
                                                        <p class="card-text" style="color:black;">Descripcion.</p>
                                                        <a href="trabajos_indi/individual_dav/1.4 alineaci??n de los objetivos de las tecnolog??as en la informaci??n.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_dav/compras.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Compra tradicional vs e-commerce</h4>
                                                        <p class="card-text" style="color:black;">Descripcion.</p>
                                                        <a href="trabajos_indi/individual_dav/Compra tradicional vs e-commerce.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_dav/BPM.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Fundamentos de gesti??n de negocios (BPM)</h4>
                                                        <p class="card-text" style="color:black;">Descripcion.</p>
                                                        <a href="trabajos_indi/individual_dav/Fundamentos de gesti??n de negocios (BPM).pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/fotos_dav/mapa_con.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title" style="color:black;">Mapa conceptual</h4>
                                                        <p class="card-text" style="color:black;">Descripcion.</p>
                                                        <a href="trabajos_indi/individual_dav/mapa conceptual" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="img/fotos_dav/reportes_vid.png">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color:black;">Reportes de los videos</h4>
                                                    <p class="card-text" style="color:black;">Descripcion.</p>
                                                    <a href="trabajos_indi/individual_dav/Reportes de videos" class="btn btn-primary">Ver Documento</a>
                                                </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row" id="divtrabajosAlexC1" style="display: none;">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3">Trabajos individuales de Jose Alex Reyes Juarez </h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators6" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators6" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" href="trabajos_equipo/Casos_de_estudio.pdf" alt="100%x280" src="img/casos.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Casos de estudio</h4>
                                                        <p class="card-text">Descripcion.</p>
                                                        <a href="trabajos_equipo/Casos_de_estudio.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/glosario.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Glosario</h4>
                                                        <p class="card-text">Descripcion.</p>
                                                        <a href="trabajos_equipo/Glosario.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/cuadro_com.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Cuadro Comparativo</h4>
                                                        <p class="card-text">Descripcion.</p>
                                                        <a href="trabajos_equipo/Cuadro_comparativo.pdf" class="btn btn-primary">Ver Documento</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="img/cuadro_com.png">
                                                    <div class="card-body">
                                                        <h4 class="card-title"></h4>
                                                        <p class="card-text">Descripcion.</p>
                                                    </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div> 
    </div>


    <!-- pie de pagina -->
    <div class="container">
        <footer  style="width:82%; margin-left: 0px;"  >
        <div class="copyright" style="background-color: #0d47a1;">
        <div class="container-fluid" style="background-color: #0d47a1; color: #bbdefb;">
        ??  Copyright: Equipo 7, Contacto: trabajos123@gmail.com Facebook:Trabajos equpo 7, Youtube: Trabajos_TI
        </div>
        </div>
    </div>

</div>
    
</body>
</html>