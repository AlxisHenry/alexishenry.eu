import AOS from "aos";
import "aos/dist/aos.css";
import * as Menu from "./components/burger-menu";
import { BackToTopArrow } from "./components/back-to-top-arrow";
import { LoadingPosition } from "./components/loading-position";
import { themeSwitcher } from "./components/theme";
import { debug } from "./main";
import { setParallaxEffect } from "./components/ParallaxElement";

window.addEventListener("load", (e) => {
  let BackToTopState = true; // Init State of back to top arrow for call the function at the loading of the page
  let status = true;
  debug(status);
  AOS.init({ duration: 1800 });
  themeSwitcher();
  LoadingPosition(e);
  Menu.ButtonAction();
  Menu.HoverNavbarMenu();
  Menu.NavbarAnimation();
  BackToTopArrow(BackToTopState);
  setParallaxEffect();
});

window.addEventListener("scroll", (e) => {
  LoadingPosition(e);
  BackToTopArrow();
});

window.addEventListener("resize", () => {
  Menu.ResizeNavAnimation();
});
