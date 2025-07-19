async function buscar() {
      const input = document.getElementById('searchInput').value.toLowerCase();

      try {
        const response = await fetch('search.json');
        const data = await response.json();

        if (data[input]) {
          window.location.href = data[input]; // Redirige a la página correspondiente
        } else {
          alert('No se encontró la página.');
        }
      } catch (error) {
        console.error('Error al cargar el JSON:', error);
        alert('Hubo un problema al buscar.');
      }
    }