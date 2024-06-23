<?php 

function trdx(){
    if ($_POST) {

        $texto = $_POST['TextoT'];
    
        $long = mb_strlen($texto, 'UTF-8');
        $mensSeparado = [];

        for ($i=0; $i < $long; $i++) { 
            $mensSeparado[] = mb_substr($texto, $i, 1, 'UTF-8');
        }

        foreach ($mensSeparado as $i) {
            switch ($i) {
                case 'a':
                    echo "<img src='img/Señas/a.jpeg' height='100px'>";
                    break;
                case 'b':
                    echo "<img src='img/Señas/b.jpeg' height='100px'>";
                    break;
                case 'c':
                    echo "<img src='img/Señas/c.jpeg' height='100px'>";
                    break;
                case 'd':
                    echo "<img src='img/Señas/d.jpeg' height='100px'>";
                    break;
                case 'e':
                    echo "<img src='img/Señas/e.jpeg' height='100px'>";
                    break;
                case 'f':
                    echo "<img src='img/Señas/f.jpeg' height='100px'>";
                    break;
                case 'g':
                    echo "<img src='img/Señas/g.jpeg' height='100px'>";
                    break;
                case 'h':
                    echo "<img src='img/Señas/h.jpeg' height='100px'>";
                    break;
                case 'i':
                    echo "<img src='img/Señas/i.jpeg' height='100px'>";
                    break;
                case 'j':
                    echo "<img src='img/Señas/j.jpeg' height='100px'>";
                    break;
                case 'k':
                    echo "<img src='img/Señas/k.jpeg' height='100px'>";
                    break;
                case 'l':
                    echo "<img src='img/Señas/l.jpeg' height='100px'>";
                    break;
                case 'm':
                    echo "<img src='img/Señas/m.jpeg' height='100px'>";
                    break;
                case 'n':
                    echo "<img src='img/Señas/n.jpeg' height='100px'>";
                    break;
                case 'ñ':
                    echo "<img src='img/Señas/ñ.jpeg' height='100px'>";
                    break;
                case 'o':
                    echo "<img src='img/Señas/o.jpeg' height='100px'>";
                    break;
                case 'p':
                    echo "<img src='img/Señas/p.jpeg' height='100px'>";
                    break;
                case 'q':
                    echo "<img src='img/Señas/q.jpeg' height='100px'>";
                    break;
                case 'r':
                    echo "<img src='img/Señas/r.jpeg' height='100px'>";
                    break;
                case 's':
                    echo "<img src='img/Señas/s.jpeg' height='100px'>";
                    break;
                case 't':
                    echo "<img src='img/Señas/t.jpeg' height='100px'>";
                    break;
                case 'u':
                    echo "<img src='img/Señas/u.jpeg' height='100px'>";
                    break;
                case 'v':
                    echo "<img src='img/Señas/v.jpeg' height='100px'>";
                    break;
                case 'w':
                    echo "<img src='img/Señas/w.jpeg' height='100px'>";
                    break;
                case 'x':
                    echo "<img src='img/Señas/x.jpeg' height='100px'>";
                    break;
                case 'y':
                    echo "<img src='img/Señas/y.jpeg' height='100px'>";
                    break;
                case 'z':
                    echo "<img src='img/Señas/z.jpeg' height='100px'>";
                    break;
                case ' ':
                    echo "<img src='img/Señas/space.jpg' height='100px'>";
                    break;
                case 'A':
                    echo "<img src='img/Señas/a.jpeg' height='100px'>";
                    break;
                case 'B':
                    echo "<img src='img/Señas/b.jpeg' height='100px'>";
                    break;
                case 'C':
                    echo "<img src='img/Señas/c.jpeg' height='100px'>";
                    break;
                case 'D':
                    echo "<img src='img/Señas/d.jpeg' height='100px'>";
                    break;
                case 'E':
                    echo "<img src='img/Señas/e.jpeg' height='100px'>";
                    break;
                case 'F':
                    echo "<img src='img/Señas/f.jpeg' height='100px'>";
                    break;
                case 'G':
                    echo "<img src='img/Señas/g.jpeg' height='100px'>";
                    break;
                case 'H':
                    echo "<img src='img/Señas/h.jpeg' height='100px'>";
                    break;
                case 'I':
                    echo "<img src='img/Señas/i.jpeg' height='100px'>";
                    break;
                case 'J':
                    echo "<img src='img/Señas/j.jpeg' height='100px'>";
                    break;
                case 'K':
                    echo "<img src='img/Señas/k.jpeg' height='100px'>";
                    break;
                case 'L':
                    echo "<img src='img/Señas/l.jpeg' height='100px'>";
                    break;
                case 'M':
                    echo "<img src='img/Señas/m.jpeg' height='100px'>";
                    break;
                case 'N':
                    echo "<img src='img/Señas/n.jpeg' height='100px'>";
                    break;
                case 'Ñ':
                    echo "<img src='img/Señas/ñ.jpeg' height='100px'>";
                    break;
                case 'O':
                    echo "<img src='img/Señas/o.jpeg' height='100px'>";
                    break;
                case 'P':
                    echo "<img src='img/Señas/p.jpeg' height='100px'>";
                    break;
                case 'Q':
                    echo "<img src='img/Señas/q.jpeg' height='100px'>";
                    break;
                case 'R':
                    echo "<img src='img/Señas/r.jpeg' height='100px'>";
                    break;
                case 'S':
                    echo "<img src='img/Señas/s.jpeg' height='100px'>";
                    break;
                case 'T':
                    echo "<img src='img/Señas/t.jpeg' height='100px'>";
                    break;
                case 'U':
                    echo "<img src='img/Señas/u.jpeg' height='100px'>";
                    break;
                case 'V':
                    echo "<img src='img/Señas/v.jpeg' height='100px'>";
                    break;
                case 'W':
                    echo "<img src='img/Señas/w.jpeg' height='100px'>";
                    break;
                case 'X':
                    echo "<img src='img/Señas/x.jpeg' height='100px'>";
                    break;
                case 'Y':
                    echo "<img src='img/Señas/y.jpeg' height='100px'>";
                    break;
                case 'Z':
                    echo "<img src='img/Señas/z.jpeg' height='100px'>";
                    break;
                case 'á':
                    echo "<img src='img/Señas/a.jpeg' height='100px'>";
                    break;
                case 'é':
                    echo "<img src='img/Señas/e.jpeg' height='100px'>";
                    break;
                case 'í':
                    echo "<img src='img/Señas/i.jpeg' height='100px'>";
                    break;
                case 'ó':
                    echo "<img src='img/Señas/o.jpeg' height='100px'>";
                    break;
                case 'ú':
                    echo "<img src='img/Señas/u.jpeg' height='100px'>";
                    break;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Talking hands</title>

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

    <!-- Inicio -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-dark mb-lg-4">Talking hands</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">Traduce tus ideas</h1>
                    <p class="fs-4 text-white mb-lg-4">Bienvenido a Talking hands, una herramienta que te ayudara a traducir tus palabras y mostrarte como puedes comunicarlas usando el lenguaje de señas.</p>
                    <a type="button" class="btn btn-primary" style="width: auto;" href="#idtraductor">Ir al traductor</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Inicio -->

    <!-- Info Lenguaje de señas -->
    <div class="text-gen">
        <div class="col-lg-8" style="margin:0px auto;">
            <div class="mb-5">
                <img class="img-fluid w-100 rounded mb-5" src="img/LSM.jpeg" alt="">
                <div style="text-align: left;">
                    <h1 class="text-uppercase mb-4">Lengua de Señas</h1>
                    <p>La lengua de señas es la lengua natural de las personas sordas. A diferencia del lenguaje oral, la lengua de señas se basa en las expresiones faciales y en diversos movimientos de las manos, los brazos y el cuerpo.</p>
                    <p>Cada país tiene su propia lengua de señas, y en el caso de nuestro país, la Lengua de Señas Mexicana (LSM), es la que utilizan las personas sordas. La LSM, como todo lenguaje, posee su propia gramática. Está compuesta por signos visuales con estructura linguÌÂística propia con la cual la comunidad sorda comunica, articula y expresa sus pensamientos y emociones. Esto les permite desarrollar sus capacidades cognitivas y de sociabilización, no solamente con su comunidad, sino con las personas oyentes que tengan la disposición de aprender un poco de su lenguaje.</p>
                    <p>Gran parte de la comunidad sorda es bilingüe; es decir, al hablar LSM pueden aprender español como su segunda lengua y con mayor facilidad, del mismo modo que una persona oyente, al saber hablar español, puede aprender a hablar otro idioma.</p>
                    <p>a lengua de señas es una hermosa lengua que también está al alcance de las personas oyentes siempre que se sumerjan en el mundo del Sordo. En consecuencia, los oyentes que cumplan estas condiciones también pueden pertenecer a ese grupo lingüístico-cultural.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Info Lenguaje de señas -->

    <!-- Info App web -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/Señas.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">Talking hands</h6>
                        <h1 class="display-5 text-uppercase mb-0">Traducir palabras a LSM</h1>
                    </div>
                    <h4 class="text-body mb-4">¿Que es y para que sirve GL?</h4>
                    <div class="bg-light p-4">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">Aproximadamente cerca de 700 mil personas padecen dificultades auditivas o son completamente sordas, esto dificulta la comunicacion entre ellas y una persona que no conoce el lenguaje de señas, para esto hemos creado GL. Es una página web que ayudará a traducir el lenguaje de señas de una forma más simple tanto para una persona común como una persona discapacitada facilitando la comunicación entre dos personas.</p>
                                <p class="mb-0">Debajo de este apartado encontraras nuestro traductor, que, con el objetivo de poder comunicarte no solo en una variante del lenguaje de señas, te permite traducir y visualizar las señas nesesarias para traducir cualquier palabra en cualquier idioma en forma de deletreo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Info App web -->

    <!-- Traductor -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="center">
                    <h1 class="text-uppercase mb-4" id="idtraductor">Traductor de texto a señas</h1>
                    <div id="inputtext">
                        <form action="index.php" method="post">
                            <textarea name="TextoT" rows="5" name="traductor" id="traductor"><?php if($_POST){echo $_POST['TextoT'];}?></textarea><br><br>
                            <img src="img/iconfinder-mute-mic-microphone-audio-sound-4593173_122241.png" height="50px" id="btnGrabar">
                            <input type="submit" value="Traducir a Señas" class="btn btn-primary">
                        </form>
                    </div>
                    
                    <div id="traduccion">
                    <?php
                        trdx();
                    ?>
                    </div>
                    <br><br>
                    <!--Traductor Señas a texto-->
                    <div>
                        <br>
                        <h1 class="text-uppercase mb-4" id="idtraductor">Traductor de señas a texto</h1>
                        <form action="" method="dialog" id=teclado>
                            <div class="divcito"><img src="img/Señas/a.jpeg" class="imagenTec" id="img1"><h4 class="indicLetra">A</h4></div>
                            <div class="divcito"><img src="img/Señas/b.jpeg" class="imagenTec" id="img2"><h4 class="indicLetra">B</h4></div>
                            <div class="divcito"><img src="img/Señas/c.jpeg" class="imagenTec" id="img3"><h4 class="indicLetra">C</h4></div>
                            <div class="divcito"><img src="img/Señas/d.jpeg" class="imagenTec" id="img4"><h4 class="indicLetra">D</h4></div>
                            <div class="divcito"><img src="img/Señas/e.jpeg" class="imagenTec" id="img5"><h4 class="indicLetra">E</h4></div>
                            <div class="divcito"><img src="img/Señas/f.jpeg" class="imagenTec" id="img6"><h4 class="indicLetra">F</h4></div>
                            <div class="divcito"><img src="img/Señas/g.jpeg" class="imagenTec" id="img7"><h4 class="indicLetra">G</h4></div>
                            <div class="divcito"><img src="img/Señas/h.jpeg" class="imagenTec" id="img8"><h4 class="indicLetra">H</h4></div>
                            <div class="divcito"><img src="img/Señas/i.jpeg" class="imagenTec" id="img9"><h4 class="indicLetra">I</h4></div>
                            <div class="divcito"><img src="img/Señas/j.jpeg" class="imagenTec" id="img10"><h4 class="indicLetra">J</h4></div>
                            <div class="divcito"><img src="img/Señas/k.jpeg" class="imagenTec" id="img11"><h4 class="indicLetra">K</h4></div>
                            <div class="divcito"><img src="img/Señas/l.jpeg" class="imagenTec" id="img12"><h4 class="indicLetra">L</h4></div>
                            <div class="divcito"><img src="img/Señas/m.jpeg" class="imagenTec" id="img13"><h4 class="indicLetra">M</h4></div>
                            <div class="divcito"><img src="img/Señas/n.jpeg" class="imagenTec" id="img14"><h4 class="indicLetra">N</h4></div>
                            <div class="divcito"><img src="img/Señas/ñ.jpeg" class="imagenTec" id="img15"><h4 class="indicLetra">Ñ</h4></div>
                            <div class="divcito"><img src="img/Señas/o.jpeg" class="imagenTec" id="img16"><h4 class="indicLetra">O</h4></div>
                            <div class="divcito"><img src="img/Señas/p.jpeg" class="imagenTec" id="img17"><h4 class="indicLetra">P</h4></div>
                            <div class="divcito"><img src="img/Señas/q.jpeg" class="imagenTec" id="img18"><h4 class="indicLetra">Q</h4></div>
                            <div class="divcito"><img src="img/Señas/r.jpeg" class="imagenTec" id="img19"><h4 class="indicLetra">R</h4></div>
                            <div class="divcito"><img src="img/Señas/s.jpeg" class="imagenTec" id="img20"><h4 class="indicLetra">S</h4></div>
                            <div class="divcito"><img src="img/Señas/t.jpeg" class="imagenTec" id="img21"><h4 class="indicLetra">T</h4></div>
                            <div class="divcito"><img src="img/Señas/u.jpeg" class="imagenTec" id="img22"><h4 class="indicLetra">U</h4></div>
                            <div class="divcito"><img src="img/Señas/v.jpeg" class="imagenTec" id="img23"><h4 class="indicLetra">V</h4></div>
                            <div class="divcito"><img src="img/Señas/w.jpeg" class="imagenTec" id="img24"><h4 class="indicLetra">W</h4></div>
                            <div class="divcito"><img src="img/Señas/x.jpeg" class="imagenTec" id="img25"><h4 class="indicLetra">X</h4></div>
                            <div class="divcito"><img src="img/Señas/y.jpeg" class="imagenTec" id="img26"><h4 class="indicLetra">Y</h4></div>
                            <div class="divcito"><img src="img/Señas/z.jpeg" class="imagenTec" id="img27"><h4 class="indicLetra">Z</h4></div>
                            <div class="divcito"><img src="img/Señas/space.jpg" class="imagenTec" id="img28"><h4 class="indicLetra">Espacio</h4></div>
                        </form><br>
                        <div id="traduccionInversa">
                        </div><br>
                        <div id="btns">
                            <form>
                                <input type="button" id="traducI" class="btn btn-primary" value="Traducir a texto">
                                <input type="button" class="btn btn-primary" value="Borrar" id="btnborrar"><br><br>
                            </form>
                        </div>
                        <div id="traductorInverso">
                        </div>
                    </div>
                    <br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- Traductor -->

    <?php
    AutoScroll();
    function AutoScroll()
    {
        if($_POST)
        {
            echo "
                <script>
                    const html = document.documentElement;
                    html.scrollTop = 2200;
                </script>";
        }
    }
    ?>

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

    <script src="voz.js"></script>
</body>
</html>