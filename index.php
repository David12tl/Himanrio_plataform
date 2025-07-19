<?php
$himnos = json_decode(file_get_contents(__DIR__ . '/app/letra.json'), true);
?>
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
                        <a href="001-060.php"><i class="fa-solid fa-arrow-right"></i></a>
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
                </div>
               
        </div>
        <div class="">
            <h3>Buscar página</h3>
            <br>
            <input type="text" id="searchInput" placeholder="Escribe el número o título" class="input-busqueda" oninput="mostrarSugerencias()">
            <div id="sugerencias" class="suggestions-box"></div>
        </div>

            <h2>Himnario Presbiteriano Solo a Dios se la Gloria</h2>
            <div class="cards-container">
                <div class="card">
                    <a href="001-060.php"><img src="images/carpeta-abierta.png" class="card-img"></a>
                    <p class="card-title">001 - 060</p>
                    
                </div>
                <div class="card">
                    <a href="61-110.php"><img src="images/carpeta-abierta.png" class="card-img"></a>
                    <p class="card-title">61 - 110</p>
                </div>
                <div class="card">
                    <a href="111-160.php"><img src="images/carpeta-abierta.png" class="card-img"></a>
                    <p class="card-title">111 - 160</p>
                </div>
                <div class="card">
                    <a href="161-210.php"><img src="images/carpeta-abierta.png" class="card-img"></a>
                    <p class="card-title">161 - 210</p>
                </div>
                <div class="card">
                    <a href="211-300.php"><img src="images/carpeta-abierta.png" class="card-img"></a>
                    <p class="card-title">211 - 300</p>
                </div>
                <div class="card">
                    <a href="301-400.php"><img src="images/carpeta-abierta.png" class="card-img"></a>
                    <p class="card-title">301 - 400</p>
                </div>
                 <div class="card">
                    <a href="401-500.php"><img src="images/carpeta-abierta.png" class="card-img"></a>
                    <p class="card-title">401 - 500</p>
                </div>
                 <div class="card">
                    <a href="501-600.php"><img src="images/carpeta-abierta.png" class="card-img"></a>
                    <p class="card-title">501 - 600</p>
                </div>
                 <div class="card">
                    <a href="601-700.php"><img src="images/carpeta-abierta.png" class="card-img"></a>
                    <p class="card-title">601 - 700</p>
                </div>
                <div class="card">
                    <a href="701-706.php"><img src="images/carpeta-abierta.png" class="card-img"></a>
                    <p class="card-title">701 - 706</p>
                </div>
            </div>
            <br>
            <h2>Himno de la Sociedad Femenil</h2>
            <div class="cards-container">
                <div class="card">
                    <a href="app/Sociedad_Fem/Sociedad_001.php"><img src="images/Sociedad Femenil.png" class="card-img"></a>
                    <p class="card-title">Himno de la Sociedad Femenil</p>
                </div>
            </div>

            <h2>Coros </h2>
            
            <div class="footer">
                <div class="line"></div>
            </div>
        </div>
        
    </div>

    <script src="./components/script.js"></script>
    <script src="./components/menu-togle.js"></script>
    <script src="./search.js"></script>

</body>
</html>es este 