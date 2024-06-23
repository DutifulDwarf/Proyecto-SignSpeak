<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Información</title>

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <script src="./index.js" defer></script>
</head>

<body>
    
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><img src="./img/Logo.jpg" width="48px" style="margin-right: 10px;">Talking hands</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Inicio</a>
                <a href="Informacion.php" class="nav-item nav-link">Información</a>
                <a href="contacto.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Contacto <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Barra de navegación -->

    <!-- Info App web -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100 w-100" style="padding-left: 10%;">
                        <img class="position-absolute rounded" src="img/Logo.jpg" style="object-fit: cover; width: 77%; height: 80%;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">Talking hands</h6>
                        <h1 class="display-5 text-uppercase mb-0">Traducir palabras y señas</h1>
                    </div>
                    <div class="bg-light p-4">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">En la pagina de inicio encontraras nuestro traductor, que, con el objetivo de poder comunicarte no solo en una variante del lenguaje de señas, te permite traducir y visualizar las señas nesesarias para traducir cualquier palabra de cualquier idioma en forma de deletreo.</p>
                                <p class="mb-0">Así mismo, contamos con un traductor de señas a texto para facilitar aun más la comunicación, para ello puede hacer uso del teclado de señas implementado con el traductor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Info App web -->

    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-start">
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-4">
                        <h6 class="text-primary text-uppercase">Talking hands</h6>
                        <h1 class="display-5 text-uppercase text-white mb-0">¡Prueba nuestro traductor!</h1>
                    </div>
                    <p class="text-white mb-0">Visita la página principal y prueba las dos opciones de traducción con las que disponemos. </p>
                    <p class="text-white mb-2">Más abajo encontrarás las indicaciones de como usar la aplicación en caso de dudas, también puedes visitar el traductor desde el siguiente botón.</p>
                    <a href="index.php#idtraductor" class="btn btn-outline-primary py-md-3 px-md-5">Ir al traductor</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 " >
        <div class="row justify-content-center">
            <!-- Blog list Start -->
            <div class="col-auto">
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-4 h-100">
                            <img class="img-fluid h-100" src="img/Numeros/1.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div>
                                <h5 class="text-uppercase mb-3">Traduccion de texto a señas</h5>
                                <p>Para traducir un mensaje usted deberá dirigirse a la página de inicio ya sea desde la barra de navegación o desde el siguiente enlace.</p>
                                <p>En la parte de abajo encontrará el apartado "Traductor de texto a señas" donde usted puede traducir el texto que guste.</p>
                                <a class="text-primary text-uppercase" href="index.php#idtraductor">Traductor<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-4 h-100">
                            <img class="img-fluid h-100" src="img/Numeros/2.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div>
                                <h5 class="text-uppercase mb-3">Escribir el mensaje</h5>
                                <p>En la sección encontrarás un cuadro de texto donde puedes escribir lo que quieres traducir. </p>
                                <p>Como alternativa a escribir el mensaje puedes activar el lector de voz desde el icono de micrófono que se encuentra en la parte de abajo del cuadro de texto.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-4 h-100">
                            <img class="img-fluid h-100" src="img/Numeros/3.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div>
                                <h5 class="text-uppercase mb-3">Traducir</h5>
                                <p>Una ve introducido el mensaje lo único que resta por hacer es traducirlo con el botón "Traducir a señas" y listo.</p>
                                <p>Usted puede traducir todos los textos y frases que quiera mientras que en la parte de abajo se le mostrara su forma de comunicarlo con señas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-4 h-100">
                            <img class="img-fluid h-100" src="img/Numeros/4.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div>
                                <h5 class="text-uppercase mb-3">Traduccion de señas a texto</h5>
                                <p>Para traducir un mensaje de señas a texto usted deberá dirigirse a la página de inicio ya sea desde la barra de navegación o desde el siguiente enlace.</p>
                                <p>En la parte de abajo encontrará el apartado "Traductor de señas a texto" donde usted puede traducir el conjunto de señas que necesite.</p>
                                <a class="text-primary text-uppercase" href="index.php#idtraductor">Traductor<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-4 h-100">
                            <img class="img-fluid h-100" src="img/Numeros/5.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div">
                                <h5 class="text-uppercase mb-3">Escribir el mensaje</h5>
                                <p>En la sección se encuentra un teclado de señas con el cual podrás escribir utilizando el cursor para seleccionar cada una de las señas que irán apareciendo en el cuadro de señas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-4 h-100">
                            <img class="img-fluid h-100" src="img/Numeros/6.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div">
                                <h5 class="text-uppercase mb-3">Traducir</h5>
                                <p>Una vez el mensaje este completo lo único que resta por hacer es traducirlo con el botón "Traducir a texto" y listo.</p>
                                <p>Para introducir un nuevo mensaje es nesesario borrar el anterior con el boton "Borrar" ubicado junto al de "Traducir a texto"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Contacto</h5>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>utp0148809@alumno.utpuebla.edu.mx</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>utp0151553@alumno.utpuebla.edu.mx</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+52 22-12-34-56-78</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Enlaces</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Inicio</a>
                        <a class="text-body mb-2" href="Informacion.php"><i class="bi bi-arrow-right text-primary me-2"></i>Información</a>
                        <a class="text-body" href="contacto.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contacto</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="text-uppercase mt-4 mb-3">Siguenos</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="https://www.facebook.com/profile.php?id=100087660801787&mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="https://instagram.com/traductor_gl?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</body>
</html>