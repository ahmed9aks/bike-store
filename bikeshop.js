const menu = document.querySelector('.navbar-toggle');
const menuLinks = document.querySelector('.navbar-menu');


menu.addEventListener("click", () => {
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
}
) 

document.querySelectorAll(".navbar-links").forEach(n => n.addEventListener("click", () => {
  menu.classList.remove('is-active');
  menuLinks.classList.remove('active');
}))