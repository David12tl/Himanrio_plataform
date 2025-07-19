const totalHimnos = 706;
const himno = himnoSeleccionado; // viene desde PHP
let currentSong = himno - 1; // índice (empieza en 0)

// Función para determinar la carpeta del himno
function getCarpeta(num) {
  if (num <= 60) return "001-060";
  if (num <= 110) return "61-110";
  if (num <= 160) return "111-160";
  if (num <= 210) return "161-210";
  if (num <= 300) return "211-300";
  if (num <= 400) return "301-400";
  if (num <= 500) return "401-500";
  if (num <= 600) return "501-600";
  if (num <= 700) return "601-700";
  return "701-704";
}

// Generar playlist con un solo himno (el elegido)
const playlist = [
  `../himnos/${getCarpeta(himno)}/${String(himno).padStart(3, '0')}.mp3`
];
