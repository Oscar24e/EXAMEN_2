<!doctype html>

<html class="home blog no-js" lang="en-US">

<head>
    <title>UPT Paper-Electronic</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC%3A400%2C700%7CLato%3A400%2C700%2C400italic%2C700italic&amp;ver=4.9.8" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="print.css" type="text/css" media="print" />
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" id="lt-ie9-css" href="ie.css" type="text/css" media="screen"/>
    <![endif]-->
    <script src='js/jquery-3.0.0.min.js'></script>
    <script src='js/jquery-migrate-3.0.1.min.js'></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body class="home sticky-menu sidebar-off" id="top">

    <header class="header">

        <div class="header-wrap">

            <div class="logo plain logo-left">
                <div class="site-title">
                    <a href="{{route('inicio')}}" title="Go to Home">UPT Paper-Electronic</a>
                </div>
            </div><!-- /logo -->


            <nav id="nav" role="navigation">
                <div class="table">
                    <div class="table-cell">
                        <ul id="menu-menu-1">
                            Blog informativo Cliente servidor
                        </ul>
                    </div>
                </div>
            </nav>
            <a href="#nav" class="menu-trigger"><i class="fa fa-bars"></i></a>

        </div>

    </header>




    <div class="wrap full-wrap">
        <div class="main-wrap">
            <section class="main main-archive">
                <div class="loop">


                    <article class="post format-gallery post_format-post-format-gallery">

                        <div class="">

                            <h2 class="entry-title">
                                <p></p>
                                <a title="Modelo, control y vista, en las arquitecturas Cliente/Servidor">
                                    Conceptos</a>
                                <p>Modelo: Es ele que define que datos va contener la aplicacion, si el estado de estos datos cambia generalmente este manda un alerta
                                    a la vista y en ciertas ocaciones al controlador.</p>

                                <p>Vista: Esta muestra los datos de la aplicacion</p>

                                <p>Controlador: Este contiene la logica de la aplicacion que actualiza al modelo y la vista con respuesta
                                    de los usuarios de la aplicacion</p>
                            </h2>
                            <div class="post-content">
                                <p></p>

                                <p>
                                    <center>
                                        <h4>Modelo Vista Controlador (MVC)</h4>
                                    </center>
                                </p>
                                <p>Es unn patron que regularmente se utiliza para la implementacion de interfaces de usuario, datos y logica de control.</p>
                                <p>Una de sus caracteristicas mas reelevante es la separacion de su logica de negocios y su visualizacion ayudando a que el trabajo se facilite mas y tambien tenga una mejora en el mantenimiento</p>
                                <p>
                                    <center>
                                        <h4>Proceso de flujo de control a partir del MVC</h4>
                                    </center>
                                </p>
                                <p>- El usuario tiene interaccion con la interfaz ya sea mediante algun boton en especifio o un elace</p>
                                <p>- Al mismo tiempo que el usuario oprime el botn el controlador recibe una notificacion de la accion que se solicita
                                    , este mismo gestiona el evento a travez de un gestor como puede ser (callback, handler)
                                </p>
                                <p>- Una vez ya gestionado el controlador accede al modelo actualizandolo con la peticion y en
                                    ocaciones hasta modificandolo con de acuerdo a la peticion, a menudo se encuntran patrones que ayudan a
                                    encapsular las acciones y simplifican su extencion</p>
                                <p>- Despues de haber generado todo este proceso el controlador es el encargado de generar la tarea que se le solicito
                                    formando la vista y desplegando la interfaz adecuada al usuario en donde se veran reflejados ya los cambios del Modelo
                                    una caracteristica particular es que el modelo no debe tener directamente el contacto con la vista sin enbargo se
                                    podra generar un patron que provee una direccion entre el modelo y la vista
                                </p>
                                <p>Se restablece el proceso y la interfaz principal queda a la espera de una nueva oeticion generando el ciclo nuevamente</p>

                                <p>
                                    <center>
                                        <h4>Desarrollo de software a partir del MVC</h4>
                                    </center>
                                </p>
                                <p><center>Ejemplo</center></p>
                                    <p>Aplicación de lista de compras</p>
                                    <p>Modelo: Especificará qué datos deben contener los artículos de la lista (artículo, precio, etc.) y qué artículos de la lista ya están presentes.</p>
                                    <p>Vista: Definiría cómo se presenta la lista al usuario y recibiría los datos para mostrar desde el modelo.</p>
                                    <p>Controlador: Entonces, por ejemplo, nuestra lista de compras podría tener formularios de entrada y botones 
                                        que nos permitan agregar o eliminar artículos. Estas acciones requieren que se actualice el modelo, por 
                                        lo que la entrada se envía al controlador, que luego manipula el modelo según corresponda, que luego envía 
                                        datos actualizados a la vista.</p>


                            </div>
                        </div>
                    </article>


                    <article class="post format-link has-post-thumbnail post_format-post-format-link">
                        <a title="Sistemas de Información">
                            <div class="part-gallery">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li><span class="post-image"><img src="images/mvc.jpg" alt="seguri" /></span></li>

                                    </ul>
                                </div>
                            </div>

                        </a>
                        <div class="">
                            <p></p>
                            <h2 class="entry-title">
                                <a title="Comunicación orientada a conexión e interfaz de programación de aplicaciones (API).">
                                    Comunicación orientada a conexión e interfaz de programación de aplicaciones (API).</a>

                                    <p>API Es un conjunto de procedimientos, funciones, metodos que ofrece una biblioteca para 
                                        ser utilizada por otro software como una capa de abstraccion</p>
                            </h2>
                            <div class="post-content">
                                <p>
                                    <center>
                                        <h4>proceso de comunicación y configuración</h4>
                                    </center>
                                </p>

                            </div>
                            <ul class="meta top">
                            </ul>
                        </div>
                    </article>


                    <article class="post format-image has-post-thumbnail post_format-post-format-image">
                        <span class="post-image">
                            <a title="Camper Van Fun">
                                <img width="916" height="611" src="images/api.jpg" class="attachment-desktop size-desktop" alt="" />
                            </a>
                        </span>
                        <div class="">
                            <p></p>
                            <h2 class="entry-title">
                                <a title="sockets">
                                    sockets</a>
                            </h2>
                            <div class="post-content">
                                <p>Un mecanismo que nos permite establecer un enlace entre dos programas que se ejecutan independientes el uno del otro </p>

                                <p>
                                    <center>
                                        <h4>Proceso del uso de sockets en aplicaciones Cliente/Servidor</h4>
                                    </center>
                                </p>
                                <p>Ejemplo</p>
                                <p>Interfaz socket raw (SOCK_RAW): Permite acceso directo a protocolos de capas más bajas tales como IP e ICMP. Esta interfaz se utiliza a menudo para comprobar nuevas implementaciones de protocolos</p>

                            </div>
                        </div>

                    </article>

                </div>
                <ul class="meta bottom">
                    <li class="cat post-tags"><a href="{{route('inicio')}}">INICIO</a>,
                    </li>
                </ul>
                </article>



        </div>


        </section>


    </div><!-- /main-wrap -->


    </div><!-- /wrap -->




    <div id="topsearch">
        <div class="table">
            <div class="table-cell">
                <form role="search" method="get" class="searchform" action="index.html">
                    <div>
                        <input type="text" value="" name="s" class="s" placeholder="Type and hit enter" />
                        <input type="submit" class="searchsubmit" value="Search" />
                    </div>
                </form>
            </div>
        </div>
        <a href="#topsearch" class="search-trigger"><i class="fa fa-times"></i></a>
    </div>


    <script>
        var ie9 = false;
    </script>
    <!--[if lte IE 9 ]>
<script> var ie9 = true; </script>
<![endif]-->
    <script src="js/global-plugins.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>