<h2>Himnario Presbiteriano Solo a Dios se la Gloria</h2>
<div class="cards-container">
    <?php
    // Cargar títulos desde un archivo JSON
    $titulosPath = __DIR__ . '/titulos.json';
    $titulos = file_exists($titulosPath) ? json_decode(file_get_contents($titulosPath), true) : [];

    for ($i = 301; $i <= 400; $i++) {
        $num = str_pad($i, 3, '0', STR_PAD_LEFT);
        echo '<div class="card">';
        echo '<a href="app/himno.php?ver=' . $i . '"><img src="images/portada.jpg" class="card-img" alt="Himno ' . $num . '"></a>';
        echo '<p class="card-title">' . $num . '</p>';

        if (isset($titulos[$i - 1])) {
            echo '<p class="card-info">' . htmlspecialchars($titulos[$i - 1]) . '</p>';
        } else {
            echo '<p class="card-info">Sin título</p>';
        }

        echo '</div>';
    }

    ?>
</div>
