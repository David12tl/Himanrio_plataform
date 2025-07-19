<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/libro.png">
    <title>Himnario Presbiteriano </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="sidebar">
            <div class="nav">
                <div class="nav-option">
                    <i class="fa-solid fa-house"></i><a href="index.php">Home</a>
                </div>
                <div class="nav-option">
                    <i class="fa-solid fa-circle-info"></i><a href="#">Acerca de</a>
                </div>
            </div>
            <div class="library">
                <br>
                <div class="options">
                    <div class="lib-option nav-option">
                        <a href="static/introduccion.php">Informacion General</a>
                    </div>
                    <div class="icons">
                        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <button class="menu-toggle">☰ Informacion General</button>
                    <div class="lib-menu">
                    <div class="lib-box">
                        <div class="box">
                            <h3>RESEÑA</h3>
                            <p>Conviene considerar el origen y desarrollo de nuestra iglesia...</p>
                            <button class="badge" onclick="location.href='static/reseña.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>Advertencia</h3>
                            <p>Todos los himnos que integran este himnario Sólo a Dios la...</p>
                            <button class="badge" onclick="location.href='static/advertencia.php'">Contenido</button>
                        </div>
                        <div class="box">
                             <h3>Indice</h3>
                            <p>¿Cuál es el fin principal del nombre? El fin principal del...</p>
                            <button class="badge" onclick="location.href='static/indice.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>PRESENTACIÓN</h3>
                            <p>La Iglesia Nacional Presbiteriana de México, como parte...</p>
                            <button class="badge" onclick="location.href='static/presentacion.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>INTRODUCCIÓN</h3>
                            <p>El canto es tan antiguo como la creación, «cuando ...</p>
                            <button class="badge" onclick="location.href='static/introduccion.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>RECONOCIMIENTO</h3>
                            <p>La honra y la gloria es para Dios, pero el ...</p>
                            <button class="badge" onclick="location.href='static/reconocimiento.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>AYUDAS LITÚRGICAS</h3>
                            <p>Creo en Dios padre Todopoderoso, Creador del...</p>
                            <button class="badge" onclick="location.href='static/ayuda.php'">Contenido</button>
                        </div>
                    </div>
                    </div>
            </div>

        </div>
        <div class="main-content">
            <div class="sticky-nav">
                <div class="nav-icons">
                     <a href="index.php"><img src="images/backward_icon.png" class="hide" alt="Back" /></a>
                    <a href="61-110.php"><img src="images/forward_icon.png" class="hide"></a>
                </div>
               
        </div>
        <?php
             include 'public/himnos_501-600.php';
            ?>
            <div class="footer">
                <div class="line"></div>
            </div>
        </div>
    </div>
</body>
</html>
 <script src="components/script.js"></script>
    <script src="components/menu-togle.js"></script>
    <script src="search.js"></script>