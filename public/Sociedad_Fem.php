<h2>Himno de la Sociedad Femenil</h2>
<div class="cards-container">
    <?php
    // Cargar títulos desde un archivo JSON correctamente
    $titulos = json_decode(file_get_contents(__DIR__ . '/Sociedad_Femenil.json'), true);

    for ($i = 1; $i <= 1; $i++) {
        $num = str_pad($i, 3, '0', STR_PAD_LEFT);
        echo '<div class="card">';
        echo '<a href="app/Sociedad_Fem/Sociedad_' . $num . '.php"><img src="images/Sociedad Femenil.png" class="card-img" alt="Himno ' . $num . '"></a>';
    

        if (isset($titulos[$i - 1])) {
            echo '<p class="card-info">' . htmlspecialchars($titulos[$i - 1]) . '</p>';
        } else {
            echo '<p class="card-info">Sin título</p>';
        }

        echo '</div>';
    }
    ?>
</div>