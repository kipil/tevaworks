<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="ftco-32x32.png">
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilosAspirante.css">
    <link rel="stylesheet" href="css/estilosCV.css">

    <link rel="stylesheet" href="css/aspirante/index.css">
    <script src="https://kit.fontawesome.com/e8948024cf.js" crossorigin="anonymous"></script>

</head>

<body>



    <header class="header">
        <nav class="menu_empresa ">
            <div class="logoEmpresa">
                <li class="nav__li"><a href="index.html">LOGOTIPO</a></li>
            </div>

            <div class="navbar">
                <ul clas="nav__ul">
                    <li class="nav__li"><a href="busquedaEmpleo.php">Buscar Empleo</a></li>
                    <li class="nav__li"><a href="cvUsuario.php">Mi CV</a></li>
                    <li class="nav__li"><a href="postulacionesUsuario.php">Mis Postulaciones</a></li>
                </ul>
            </div>
          

            <div class="dropdown">
                <li class="nav__li dropdown">
                    <a class="nav__lii dropdown-toggle active" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mi Cuenta
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="usuarioIndex.php">Mi Perfil</a>
                        <a class="dropdown-item" href="#">Cambiar Contraseña</a>
                        <a class="dropdown-item" href="#">Cerrar Sesión</a>
                    </div>
                </li>
            </div>
        </nav>
    </header>



    <div class="perfilCV">
        <div class="foto-perfil">
            <img src="images/img_1.jpg" alt="">
        </div>
        <div class="titulo">
            <h2>Gerente</h2>
            <div class="form-group green-border-focus text-area">
                <textarea class="form-control" id="textarea" rows="3" maxlength="200">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam natus vitae odit molestias ex inventore eligendi optio in sequi reiciendis. Quae ad reprehenderit distinctio ducimus sint soluta expedita laboriosam sunt, harum ea neque maxime facere nobis ipsam impedit asperiores quod. Autem repudiandae ipsa illum praesentium illo, adipisci dolores tempore impedit, aperiam vitae magni doloribus, similique tenetur! Cupiditate sunt, maiores deleniti nihil aliquid recusandae nesciunt aut sequi reprehenderit! Corrupti sunt consequuntur rem tempore culpa vero quis temporibus? Numquam alias a architecto quia quo laboriosam facilis odit consequatur ipsum similique rerum earum, dolore exercitationem debitis odio praesentium, dolor temporibus eum assumenda nisi?
                </textarea>
            </div>
            <hr>
            <h3>20,000-30,000</h3>
        </div>
    </div>

    <div class="datos-personalesCV">
        <table>
            <tr>
                <td>
                    <i class="fas fa-user"></i> Jorge Alberto
                </td>
                <td>
                    <i class="fas fa-user"></i>Masculino
                </td>
                <td>
                    <i class="fas fa-user"></i>Correo@gmail.com
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fas fa-user"></i>Casado/a
                </td>
                <td>
                    <i class="fas fa-user"></i>17 junio 79
                </td>
                <td>
                    <i class="fas fa-user"></i>777-454-5665
                </td>
            </tr>
            <tr>
                <td>
                    <i class="fas fa-user"></i>36 años
                </td>
                <td>
                    <i class="fas fa-user"></i>Cuernavaca, Morelos
                </td>
                <td>
                    <i class="fas fa-user"></i>777-555-6498
                </td>
            </tr>
        </table>

    </div>
    <div class="datos-escolaresCV">
        <table class="estudios">
            <tr>
                <td class="icono-estudios">
                    <i class="fas fa-graduation-cap"></i>
                </td>
                <td>
                    <h3 class="nombre-universidad">Universidad</h3>
                    <h4>Tecnológico Zapata</h4>
                    <p class="carrera">Carrera: Licenciatura en administración de empresas</p>
                    <p>Jun 2018- Actualmente cursando</p>
                </td>
            </tr>
            <tr>
                <td class="icono-estudios">
                    <i class="fas fa-graduation-cap"></i>
                </td>
                <td>
                    <h3 class="nombre-universidad">Universidad</h3>
                    <h4>Tecnológico Zapata</h4>
                    <p class="carrera">Carrera: Licenciatura en administración de empresas</p>
                    <p>Jun 2018- Actualmente cursando</p>
                </td>
            </tr>
        </table>

    </div>

    <div class="datos-laboralesCV">
        <div class="trabajos">
            <h3>Consorcio ARA</h3>
            <h4>Gerente de Recursos Humanos</h4>
            <p>FI: Enero 2016 FS: <input type="checkbox" name="" id="" autofocus> Actualmente Cursando</p>
            <h4>Actividades:</h4>
            <p>Responsable Nomina, responsable del reclutamiento, facturación, actividades
                administrativas, baja de personal, capacitación de personal a nuevo ingreso, reportes
                directos a dirección general, atención a personal sindicalizado</p>
        </div>

        <div class="trabajos">
            <h3>Grupo ALICIONE</h3>
            <h4>Gerente de Recursos Humanos</h4>
            <p>FI: Enero 2016 FS: 2016</p>
            <h4>Actividades:</h4>
            <p>Nomina, responsable del reclutamiento, facturación, actividades administrativas,
                baja de personal, capacitación de personal a nuevo ingreso.</p>
        </div>
    </div>
    <div class="datos-complementariosCV">

        <div class="complementario">
            <h2>Idiomas</h2>
            <ul>
                <li>Ingles-Avanzado</li>
                <li>Portugues-Básico</li>
            </ul>


        </div>
        <div class="complementario">
            <h2>Software</h2>
            <ul>
                <li>Excel-Avanzado</li>
                <li>Publisher-Intermedio</li>
                <li>Outlook-Intermedio</li>
            </ul>
        </div>
        <div class="complementario">
            <h2>Certificaciones</h2>
            <ul>
                <li>ISO 9001 2015/li>
                <li>Jun-2015</li>
            </ul>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/previsualizar.js"></script>
    <script src="js/elementosform.js"></script>
</body>

</html>
