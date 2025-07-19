<div class="music-player">
            <div class="album"></div>
            <div class="player">
                <div class="player-controls">
                    <img src="images/player_icon1.png" class="player-control-icon">
                    <img src="images/player_icon2.png" class="player-control-icon">
                    <img src="images/player_icon3.png" class="player-control-icon" style="opacity: 1;height: 2rem;">
                    <img src="images/player_icon4.png" class="player-control-icon">
                    <img src="images/player_icon5.png" class="player-control-icon">
                    <div class="audio-info">
                    <span id="songName" style="font-size: 1rem; color: #fff; margin-bottom: 0.2rem;">Reproduciendo: 001.mp3</span>
                    <div style="display: flex; align-items: center; justify-content: center; width: 90%;">
                        <span id="currentTime" style="font-size: 0.9rem; color: #ccc; min-width: 40px;">00:00</span>
                        <input type="range" id="progressBar" value="0" min="0" max="100" step="1" style="flex:1; margin: 0 0.5rem;">
                        <span id="duration" style="font-size: 0.9rem; color: #ccc; min-width: 40px;">00:00</span>
                        </div>
                    </div>
                </div>
                <!-- Reproductor de audio nativo oculto -->
                <div style="text-align:center; margin: 0.5rem 0;">
                    <audio id="audioPlayer" controls style="width:90%; background:#232323; border-radius:1rem; display:none;">
                        <source src="himnos/001-060/001.mp3" type="audio/mp3">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                </div>
            </div>
            <div class="controls"></div>
        </div>
        <script src="../Wcomponents/script.js"></script>