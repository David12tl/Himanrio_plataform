  const audio = document.getElementById('audioPlayer');
    const progress = document.getElementById('progress');
    const thumb = document.getElementById('thumb');

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
      // Si usas listas, aquí puedes implementar aleatoriedad
      alert('Shuffle activado (a implementar)');
    }

    audio.addEventListener('timeupdate', () => {
      const percent = (audio.currentTime / audio.duration) * 100;
      progress.style.width = percent + '%';
      thumb.style.left = percent + '%';
    });
