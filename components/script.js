document.addEventListener("DOMContentLoaded", () => {
  const audio = document.getElementById('audioPlayer');
  const progress = document.getElementById('progress');
  const thumb = document.getElementById('thumb');

  if (!audio) {
    console.warn("No se encontró el elemento #audioPlayer");
    return;
  }

  // Establecer la fuente del audio (puedes cambiar la ruta por defecto aquí)
  document.getElementById('audioSource').src = 'ruta/a/tu/audio.mp3';

  // Funciones de control
  function playAudio() {
    audio.play();
  }

  function pauseAudio() {
    audio.pause();
  }

  function skip(seconds) {
    audio.currentTime += seconds;
  }

  function toggleRepeat() {
    audio.loop = !audio.loop;
    alert('Repetición: ' + (audio.loop ? 'activada' : 'desactivada'));
  }

  function toggleShuffle() {
    alert('Shuffle activado (a implementar)');
  }

  // Solo añadimos eventos si existen los elementos
  if (progress && thumb) {
    audio.addEventListener('timeupdate', () => {
      if (!isNaN(audio.duration) && audio.duration > 0) {
        const percent = (audio.currentTime / audio.duration) * 100;
        progress.style.width = percent + '%';
        thumb.style.left = percent + '%';
      }
    });
  } else {
    console.warn("No se encontraron los elementos #progress o #thumb.");
  }
});
