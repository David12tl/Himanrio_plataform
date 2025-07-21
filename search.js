function searchHimnos() {
    const query = document.getElementById('searchInput').value.toLowerCase();
    const resultsContainer = document.getElementById('resultsContainer');
    resultsContainer.innerHTML = '';

    if (!query) {
        resultsContainer.innerHTML = '<p>Ingresa un número o parte del título para buscar.</p>';
        return;
    }

    let found = false;
    for (let key in himnosData) {
        const numero = key.toString();
        const titulo = himnosData[key].titulo.toLowerCase();

        // Buscar por número exacto o coincidencia parcial en el título
        if (numero === query || titulo.includes(query)) {
            found = true;
            const div = document.createElement('div');
            div.classList.add('card');
            div.innerHTML = `
                <p class="card-title">${numero} - ${himnosData[key].titulo}</p>
                <p class="card-info">${himnosData[key].letra.substring(0, 100)}...</p>
            `;
            resultsContainer.appendChild(div);
        }
    }

    if (!found) {
        resultsContainer.innerHTML = '<p>No se encontró ningún himno con ese número o título.</p>';
    }
}
