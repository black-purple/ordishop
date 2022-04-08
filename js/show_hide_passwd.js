"use-strict";

function showPassword(elm) {
    if (elm.previousElementSibling.firstElementChild.type === "password") {
      elm.previousElementSibling.firstElementChild.type = "text";
      elm.previousElementSibling.firstElementChild.focus();      
      elm.firstElementChild.setAttribute("class", "fa-solid fa-eye-slash");
    } else {
      elm.previousElementSibling.firstElementChild.type = "password";
      elm.previousElementSibling.firstElementChild.focus();      
      elm.firstElementChild.setAttribute("class", "fa-solid fa-eye");
    }
  }