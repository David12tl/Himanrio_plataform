<?php
// Recibe el número del himno, por defecto 1
$ver = isset($_GET['ver']) ? max(1, min(intval($_GET['ver']), 706)) : 1;

// Cargar letras desde letra.json
$himnos = json_decode(file_get_contents(__DIR__ . '/letra.json'), true);

// Función para ubicar la carpeta del audio
function getCarpeta($num) {
    if ($num <= 60) return "001-060";
    if ($num <= 110) return "061-110";
    if ($num <= 160) return "111-160";
    if ($num <= 210) return "161-210";
    if ($num <= 300) return "211-300";
    if ($num <= 400) return "301-400";
    if ($num <= 500) return "401-500";
    if ($num <= 600) return "501-600";
    if ($num <= 700) return "601-700";
    return "701-704";
}

$carpeta = getCarpeta($ver);
$audioFile = "../himnos/$carpeta/" . str_pad($ver, 3, '0', STR_PAD_LEFT) . ".mp3";

$titulo = isset($himnos[$ver]['titulo']) ? $himnos[$ver]['titulo'] : "Himno sin título";
$letra = isset($himnos[$ver]['letra']) ? nl2br(htmlspecialchars($himnos[$ver]['letra'])) : "Letra no disponible.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="../images/libro.png" />
  <title>Himnario Presbiteriano</title>
  <link rel="stylesheet" href="../styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <div class="main">
    <div class="sidebar">
            <div class="nav">
                <div class="nav-option">
                    <i class="fa-solid fa-house"></i><a href="../index.php">Home</a>
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
                            <button class="badge" onclick="location.href='../static/reseña.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>Advertencia</h3>
                            <p>Todos los himnos que integran este himnario Sólo a Dios la...</p>
                            <button class="badge" onclick="location.href='../static/advertencia.php'">Contenido</button>
                        </div>
                        <div class="box">
                             <h3>Indice</h3>
                            <p>¿Cuál es el fin principal del nombre? El fin principal del...</p>
                            <button class="badge" onclick="location.href='../static/indice.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>PRESENTACIÓN</h3>
                            <p>La Iglesia Nacional Presbiteriana de México, como parte...</p>
                            <button class="badge" onclick="location.href='../src/presentacion.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>INTRODUCCIÓN</h3>
                            <p>El canto es tan antiguo como la creación, «cuando ...</p>
                            <button class="badge" onclick="location.href='../static/introduccion.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>RECONOCIMIENTO</h3>
                            <p>La honra y la gloria es para Dios, pero el ...</p>
                            <button class="badge" onclick="location.href='../static/reconocimiento.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>AYUDAS LITÚRGICAS</h3>
                            <p>Creo en Dios padre Todopoderoso, Creador del...</p>
                            <button class="badge" onclick="location.href='../static/ayuda.php'">Contenido</button>
                        </div>
                    </div>
                    </div>
            </div>

        </div>
      <div class="main-content">
        <div class="sticky-nav">
          <div class="nav-icons">
            <a href="?ver=<?php echo max($ver-1, 1); ?>"><img src="../images/backward_icon.png" alt="Back" /></a>
            <a href="?ver=<?php echo min($ver+1, 706); ?>"><img src="../images/forward_icon.png" alt="Forward" /></a>
          </div>
        </div>

        <div class="himno" style="color:white; padding:2rem; text-align:center; font-size: 1.2rem;">
          <h2>Himnario Presbiteriano Solo a Dios sea la Gloria</h2>
          <h1><?php echo $titulo; ?></h1>
          <p><?php echo $letra; ?></p>
          <audio id="audioPlayer">
            <source src="<?php echo $audioFile; ?>" type="audio/mp3">
            Tu navegador no soporta el audio.
          </audio>
        </div>
        <div class="music-bar">
          <div class="progress-container" id="progressContainer">
            <div class="progress" id="progress"></div>
            <div class="progress-thumb" id="thumb"></div>
          </div>
          <div class="controls">
            <button onclick="skip(-10)"><i class="fas fa-backward"></i></button>
            <button id="playPauseBtn" onclick="togglePlayPause()"><i class="fas fa-play"></i></button>
            <button onclick="skip(10)"><i class="fas fa-forward"></i></button>
            <button onclick="toggleRepeat()"><i class="fas fa-repeat"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
   const audio = document.getElementById('audioPlayer');
    const progress = document.getElementById('progress');
    const thumb = document.getElementById('thumb');
    const progressContainer = document.getElementById('progressContainer');
    const playPauseBtn = document.getElementById('playPauseBtn');
    let isPlaying = false;

    function togglePlayPause() {
      if (isPlaying) {
        audio.pause();
      } else {
        audio.play();
      }
    }

    function skip(seconds) {
      audio.currentTime += seconds;
    }

    function toggleRepeat() {
      audio.loop = !audio.loop;
      alert('Repetición: ' + (audio.loop ? 'activada' : 'desactivada'));
    }

    audio.addEventListener('play', () => {
      playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
      isPlaying = true;
    });

    audio.addEventListener('pause', () => {
      playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
      isPlaying = false;
    });

    audio.addEventListener('timeupdate', () => {
      const percent = (audio.currentTime / audio.duration) * 100;
      progress.style.width = percent + '%';
      thumb.style.left = percent + '%';
    });

    progressContainer.addEventListener('click', (e) => {
      const width = progressContainer.clientWidth;
      const clickX = e.offsetX;
      audio.currentTime = (clickX / width) * audio.duration;
    });
</script>
    <script src="../components/menu-togle.js"></script>
    <script src="../search.js"></script>
</body>
</html>
