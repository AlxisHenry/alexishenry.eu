import { AboutAnimation } from "../components/about";

const RedirectToKeyword = () => {
  let submitSearch = document.querySelector(".__submit__search__");
  let submitValue = document.querySelector(".__search__input__");
  submitValue.addEventListener("keyup", (e) => {
    if (e.keyCode === 13) {
      if (e.target.value.length > 2) {
        submitSearch.click();
      }
    } else {
      e.preventDefault();
    }
  });
  submitSearch.addEventListener("click", (e) => {
    let value = submitValue.value;
    if (value.length > 2) {
      document.location.href = `/news/search/${value.toLowerCase()}`;
    } else {
      e.preventDefault();
    }
  });
};

window.addEventListener("load", (e) => {
  AboutAnimation(e);
  RedirectToKeyword(e);
});
