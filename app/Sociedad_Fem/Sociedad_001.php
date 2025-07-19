<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="../../images/libro.png" />
  <title>Himnario Presbiteriano</title>
  <link rel="stylesheet" href="../../styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet" />
</head>
<body>
  <div class="main">
    <div class="sidebar">
      <div class="nav">
        <div class="nav-option" style="opacity: 1;">
          <i class="fa-solid fa-house"></i>
          <a href="../../index.php">Home</a>
        </div>
        <div class="nav-option">
          <i class="fa-solid fa-magnifying-glass"></i>
          <a href="#">Search</a>
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
                            <button class="badge" onclick="location.href='/static/reseña.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>Advertencia</h3>
                            <p>Todos los himnos que integran este himnario Sólo a Dios la...</p>
                            <button class="badge" onclick="location.href='/static/indice.php'">Contenido</button>
                        </div>
                        <div class="box">
                             <h3>Indice</h3>
                            <p>¿Cuál es el fin principal del nombre? El fin principal del...</p>
                            <button class="badge" onclick="location.href='/static/reseña.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>PRESENTACIÓN</h3>
                            <p>La Iglesia Nacional Presbiteriana de México, como parte...</p>
                            <button class="badge" onclick="location.href='/static/presentacion.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>INTRODUCCIÓN</h3>
                            <p>El canto es tan antiguo como la creación, «cuando ...</p>
                            <button class="badge" onclick="location.href='/static/introduccion.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>RECONOCIMIENTO</h3>
                            <p>La honra y la gloria es para Dios, pero el ...</p>
                            <button class="badge" onclick="location.href='/static/reconocimiento.php'">Contenido</button>
                        </div>
                        <div class="box">
                            <h3>AYUDAS LITÚRGICAS</h3>
                            <p>Creo en Dios padre Todopoderoso, Creador del...</p>
                            <button class="badge" onclick="location.href='/static/ayudas.php'">Contenido</button>
                        </div>
                    </div>
                    </div>
      </div>
    </div>
          <?php
      $ver = $_GET['ver'] ?? '1';
      $himnos =  json_decode(file_get_contents(__DIR__ . '/letra.json'), true);
      ?>

      <div class="main-content">
        <div class="sticky-nav">
          <div class="nav-icons">
            <a href="../../index.php"><img src="../../images/backward_icon.png" class="hide" alt="Back" /></a>
            <a href="?ver=<?php echo min(intval($ver)+1, 706); ?>"><img src="../../images/forward_icon.png" class="hide" alt="Forward" /></a>
          </div>
        </div>

        <?php if (isset($himnos[$ver])): ?>
          <div class="himno" style="color:white; padding:2rem; text-align:center; font-size: 1.2rem;">
            <h1>Himno de la Sociedad Femenil</h1>
            <h2><?php echo htmlspecialchars($himnos[$ver]['titulo']); ?></h2>
            <p><?php echo nl2br(htmlspecialchars($himnos[$ver]['letra'])); ?></p>
          </div>
        <?php else: ?>
          <p style="color:white;">Himno no disponible.</p>
        <?php endif; ?>
      </div>
       
    </div>
    <div class="music-player">
      <div class="album"></div>
      <div class="player">
        <div class="player-controls">
          <img src="../../images/player_icon5.png" class="player-control-icon" alt="Play Icon" />
          <img src="../../images/player_icon2.png" class="player-control-icon" alt="Prev Icon" />
          <img src="../../images/player_icon3.png" class="player-control-icon" style="opacity: 1;height: 2rem;" alt="Pause Icon" />
          <img src="../../images/player_icon4.png" class="player-control-icon" alt="Shuffle Icon" />
          <img src="../../images/player_icon1.png" class="player-control-icon" alt="Loop Icon" />
          <div class="audio-info">
            <span id="songName" style="font-size: 1rem; color: #fff; margin-bottom: 0.2rem;">Reproduciendo: 001.mp3</span>
            <div style="display: flex; align-items: center; justify-content: center; width: 90%;">
              <span id="currentTime" style="font-size: 0.9rem; color: #ccc; min-width: 40px;">00:00</span>
              <input type="range" id="progressBar" value="0" min="0" max="100" step="1" style="flex:1; margin: 0 0.5rem;">
              <span id="duration" style="font-size: 0.9rem; color: #ccc; min-width: 40px;">00:00</span>
            </div>
          </div>
        </div>
        <div style="text-align:center; margin: 0.5rem 0;">
          <audio id="audioPlayer" controls style="width:90%; background:#232323; border-radius:1rem; display:none;">
            <source src="../../himnos/Sociedad_Femenil.mp3" type="audio/mp3">
            Tu navegador no soporta el elemento de audio.
          </audio>
        </div>
      </div>
      <div class="controls"></div>
    </div>
  </div>

<script>
let currentSong = 0;
const playlist = ["../../himnos/Sociedad_Femenil.mp3"];
const audioPlayer = document.getElementById('audioPlayer');
const songNameText = document.getElementById('songName');
const currentTimeText = document.getElementById('currentTime');
const durationText = document.getElementById('duration');
const progressBar = document.getElementById('progressBar');
const icons = document.querySelectorAll('.player-control-icon');

function formatTime(time) {
  if (isNaN(time)) return "00:00";
  const min = Math.floor(time / 60);
  const sec = Math.floor(time % 60);
  return `${min.toString().padStart(2, '0')}:${sec.toString().padStart(2, '0')}`;
}


function updateProgress() {
  const { duration, currentTime } = audioPlayer;
  if (!isNaN(duration)) {
    const progress = (currentTime / duration) * 100;
    progressBar.value = progress;
    currentTimeText.textContent = formatTime(currentTime);
    durationText.textContent = formatTime(duration);
  }
}

function loadSong(index) {
  audioPlayer.src = playlist[index];
  audioPlayer.play().catch(err => console.log("Error al reproducir:", err));
  icons[2].src = "../../images/player_icon4.png";
  songNameText.textContent = "Reproduciendo: " + playlist[index].split("/").pop();
}

icons[0].addEventListener('click', function() {
  loadSong(0);
});

icons[1].addEventListener('click', function() {
  currentSong = (currentSong - 1 + playlist.length) % playlist.length;
  loadSong(currentSong);
});

icons[2].addEventListener('click', function() {
  if (audioPlayer.paused) {
    audioPlayer.play();
    icons[2].src = "../../images/player_icon4.png";
  } else {
    audioPlayer.pause();
    icons[2].src = "../../images/player_icon3.png";
  }
});

icons[3].addEventListener('click', function() {
  currentSong = Math.floor(Math.random() * playlist.length);
  loadSong(currentSong);
});

icons[4].addEventListener('click', function() {
  audioPlayer.loop = !audioPlayer.loop;
  icons[4].style.opacity = audioPlayer.loop ? "1" : "0.7";
});

audioPlayer.addEventListener('timeupdate', updateProgress);
audioPlayer.addEventListener('loadedmetadata', function() {
  durationText.textContent = formatTime(audioPlayer.duration);
});

progressBar.addEventListener('input', function () {
  if (!isNaN(audioPlayer.duration)) {
    audioPlayer.currentTime = (progressBar.value / 100) * audioPlayer.duration;
  }
});

let started = false;
window.addEventListener("click", function () {
  if (!started) {
    started = true;
    loadSong(currentSong);
    audioPlayer.muted = false;
    audioPlayer.play().catch(err => console.log("Autoplay bloqueado:", err));
  }
}, { once: true });
</script>
</body>
</html>