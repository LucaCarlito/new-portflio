//hamburger menu
   
const hamburger_menu = document.querySelector(".hamburger-menu");
const container = document.querySelector(".container");
const links = document.querySelectorAll('.links ul li a');

console.log(links);

links.forEach(link => {
  link.addEventListener('click', clickedOnLink);
});

hamburger_menu.addEventListener("click", () => {
  container.classList.toggle("active");
});

function clickedOnLink()
{
  container.classList.toggle('active');
}


if (history.scrollRestoration) {
  history.scrollRestoration = 'manual';
} else {
  window.onbeforeunload = function () {
      window.scrollTo(0, 0);
  }
}
// Hamburger menu 