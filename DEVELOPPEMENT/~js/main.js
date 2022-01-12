console.time("Exécution script JS");

// Fonctions globales

document.getElementById("btn-rar").addEventListener("click", (e) => {
  if (confirm("Redirect ?")) {
    history.back();
  } else {
    e.preventDefault();
    void 0;
  }
});

document.getElementById("href-discord").addEventListener("click", (e) => {
  if (confirm("Redirect ?")) {
    // Redirection vers discord
  } else {
    e.preventDefault();
    void 0;
  }
});

function sleepFor(sleepDuration) {
  var now = new Date().getTime();
  while (new Date().getTime() < now + sleepDuration) {
    /* Do nothing */
  }
}

// Fonctions utilisées sur 'index.html'

let img1 = document.querySelector(".img1"),
  img2 = document.querySelector(".img2"),
  img3 = document.querySelector(".img3"),
  img_centrale = document.getElementById("img-centrale"),
  img_nd = document.getElementById("img-scnd"),
  img_th = document.getElementById("img-thrd"),
  src_prp = document.querySelector(".src"),
  href_img = document.getElementById("href-img");

function change_to_img1() {
  img3.classList.remove("fas");
  img2.classList.remove("fas");
  img1.classList.add("fas");
  img_centrale.title = timken.title;
  img_centrale.alt = timken.alt;
  img_centrale.src = timken.img;
  img_nd.src = snipeit.img;
  img_th.src = aleatory.img;
  src_prp.onclick = function () {
    href_img.href = timken.href;
  };
}

function change_to_img2() {
  img1.classList.remove("fas");
  img1.classList.add("far");
  img3.classList.remove("fas");
  img2.classList.add("fas");
  img_centrale.title = snipeit.title;
  img_centrale.alt = snipeit.alt;
  img_centrale.src = snipeit.img;
  img_nd.src = timken.img;
  img_th.src = aleatory.img;
  src_prp.onclick = function () {
    href_img.href = snipeit.href;
  };
}

function change_to_img3() {
  img1.classList.remove("fas");
  img1.classList.add("far");
  img2.classList.remove("fas");
  img3.classList.add("fas");
  img_centrale.title = aleatory.title;
  img_centrale.alt = aleatory.alt;
  img_centrale.src = aleatory.img;
  img_nd.src = timken.img;
  img_th.src = snipeit.img;
  src_prp.onclick = function () {
    let href_links_path = [timken.href, snipeit.href];
    let random_path_selector =
      href_links_path[Math.floor(Math.random() * href_links_path.length)];
    href_img.href = random_path_selector;
  };
}

function change_img_auto() {
  setInterval(change_to_img2, 4000);
  setInterval(change_to_img3, 8000);
  setInterval(change_to_img1, 12000);
}

// Fonctions utilisées sur 'comprendre.html'

// Fonctions utilisées sur 'presentation.html'

// Fonctions utilisées sur 'projets.html'

// Fonctions utilisées sur 'projet-timken.html'

let video = document.getElementById("video_projet"),
  frame = document.getElementById("frame_projet"),
  ico_video = document.getElementById("file-video"),
  ico_frame = document.getElementById("file-code"),
  ico_video_info = document.getElementById("info-circle"),
  ico_frame_info = document.getElementById("info-circle_code"),
  info_frame = document.getElementById("infodivframe"),
  info_video = document.getElementById("infodivvideo");

  function toggle() {
  if (getComputedStyle(video).display != "none") {
    style.display.none(video);
    style.display.flex(frame);
    style.display.none(ico_video);
    style.display.flex(ico_frame);
    style.display.none(ico_video_info);
    style.display.flex(ico_frame_info);
  } else {
    style.display.flex(video);
    style.display.none(frame);
    style.display.flex(ico_video);
    style.display.none(ico_frame);
    style.display.flex(ico_video_info);
    style.display.none(ico_frame_info);
  }
}

function info_video_up() {
  style.display.flex(info_video);
  sleepFor(100);
  style.filter.blur(video, 4)
  style.opacity(video, 0.5);
}
function info_video_down() {
  style.display.none(info_video);
  sleepFor(100);
  style.filter.none(video)
  style.opacity(video, 1);
}

function info_frame_up() {
  style.display.flex(info_frame);
  sleepFor(100);
  style.filter.blur(frame, 4)
  style.opacity(frame, 0.1);
}
function info_frame_down() {
  style.display.none(info_frame);
  sleepFor(100);
  style.filter.none(frame);
  style.opacity(frame, 1);
}

// Fonctions utilisées sur 'projet-snipe-it.html'

// Fonctions globales

console.timeEnd("Exécution script JS");
