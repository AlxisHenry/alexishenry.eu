console.time("Exécution script JS");

import { images } from "./modules/data.js";

// ------------------ HISTORY BACK ICON  ------------------

document.getElementById("btn-rar").addEventListener("click", () => {
    history.back();
});

// ------------------ SEND TO DISCORD ICON ------------------

document.getElementById("href-discord").addEventListener("click", () => {
});

// ------------------ SLEEP FUNC ------------------

export function sleepFor(sleepDuration) {
  var now = new Date().getTime();
  while (new Date().getTime() < now + sleepDuration) {
    /* Do nothing */
  }
}

// ------------------ LOADER ------------------

if (document.querySelector('.loader-style-display')) {
  const loader = document.querySelector('.loader-style-display');
  const LoaderImg = `<img id="loader-aleatory-img" alt="${images.aleatory.alt}" title="aleatory" src="${images.aleatory.img}"/>`
  loader.insertAdjacentHTML('afterbegin', LoaderImg);
  
  window.addEventListener('load', displayLoader);
  
  function displayLoader() {
    loader.className += " loader-none";
  }
}

// ------------------ MENU ICON ------------------

const menu_deroulantHover = document.querySelector(".fa-chevron-circle-down");
const menu_deroulantTable = document.querySelector("#responsive");

const overMenu = menu_deroulantHover.addEventListener("mouseover", () => {
  menu_deroulantHover.classList.add("fa-chevron-circle-down-hover");
});
const outMenu = menu_deroulantHover.addEventListener("mouseout", () => {
  menu_deroulantHover.classList.remove("fa-chevron-circle-down-hover");
});
const overTable = menu_deroulantTable.addEventListener("mouseover", () => {
  menu_deroulantHover.classList.add("fa-chevron-circle-down-hover");
});
const outTable = menu_deroulantTable.addEventListener("mouseout", () => {
  menu_deroulantHover.classList.remove("fa-chevron-circle-down-hover");
});

// ------------------ FOOTER ------------------

const date = new Date();

if (document.querySelector("#index_page") || document.querySelector("#footer_page")){
  var href_to_mentions = "./DEVELOPPEMENT/html/mentions-legales.html";
} else {
  var href_to_mentions = "../html/inprogress.html";
  document.getElementById("foot").style.display = "none";
}

const FooterText = `<a class="href-to-mentions" href="${href_to_mentions}"><span id="footerspan">© ${date.getFullYear()} Alexis Henry. 
All Rights Reserved</span></a>`;

const addHTML_toFooter = document
  .getElementById("foot")
  .insertAdjacentHTML("afterbegin", FooterText);

// ------------------ FAVICON ------------------

if (document.querySelector("#index_page")){
  let href_to_favicon = "./DEVELOPPEMENT/assets/ico/favicon.png";
  const favicon = `<link rel="icon" href="${href_to_favicon}" />`;
  document.querySelector("title").insertAdjacentHTML("afterend", favicon);
} else {
  let href_to_favicon = "../assets/ico/favicon.png"; 
  const favicon = `<link rel="icon" href="${href_to_favicon}" />`;
  document.querySelector("title").insertAdjacentHTML("afterend", favicon);
}

// ------------------ DEBUG ------------------

console.log(`%cIf you see a bug, please report them on : https://github.com/AlxisHenry/CCI-2021-PORTFOLIO`, "color: red; font-size:10px;");