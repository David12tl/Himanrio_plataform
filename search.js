let datosGlobales = null;

function normalizarTexto(texto) {
  return texto
    .toLowerCase()
    .normalize("NFD")
    .replace(/[\u0300-\u036f]/g, "")
    .trim();
}

async function cargarDatos() {
  if (!datosGlobales) {
    try {
      const res = await fetch('./search_706_himnos.json');
      datosGlobales = await res.json();
    } catch (error) {
      console.error("Error al cargar JSON:", error);
    }
  }
}

async function buscar() {
  const input = normalizarTexto(document.getElementById('searchInput').value);
  await cargarDatos();

  if (!datosGlobales) return alert('Error cargando datos.');

  // Buscar por número exacto
  if (datosGlobales.por_numero[input]) {
    window.location.href = datosGlobales.por_numero[input];
    return;
  }

  // Buscar por coincidencia en título
  for (const [titulo, ruta] of Object.entries(datosGlobales.por_nombre)) {
    if (normalizarTexto(titulo).includes(input)) {
      window.location.href = ruta;
      return;
    }
  }

  alert('No se encontró el himno. Intenta con parte del título o número.');
}

async function mostrarSugerencias() {
  const input = document.getElementById('searchInput').value;
  const sugerencias = document.getElementById('sugerencias');
  const texto = normalizarTexto(input);

  await cargarDatos();
  sugerencias.innerHTML = '';

  if (texto.length === 0) return;

  const resultados = [];

  // Por número
  if (datosGlobales.por_numero[texto]) {
    resultados.push({ titulo: `Himno #${texto}`, ruta: datosGlobales.por_numero[texto] });
  }

  // Por título
  for (const [titulo, ruta] of Object.entries(datosGlobales.por_nombre)) {
    if (normalizarTexto(titulo).includes(texto)) {
      resultados.push({ titulo, ruta });
    }
  }

  resultados.slice(0, 10).forEach(resultado => {
    const item = document.createElement('div');
    item.textContent = resultado.titulo;
    item.onclick = () => window.location.href = resultado.ruta;
    sugerencias.appendChild(item);
  });

  if (resultados.length === 0) {
    const item = document.createElement('div');
    item.textContent = 'No se encontraron resultados';
    sugerencias.appendChild(item);
  }
}
