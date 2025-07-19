document.addEventListener('DOMContentLoaded', function () {
  const toggleBtn = document.querySelector('.menu-toggle');
  const libMenu = document.querySelector('.lib-menu');

  toggleBtn.addEventListener('click', () => {
    libMenu.classList.toggle('active');
  });
});