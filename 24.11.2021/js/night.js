let mainyfon = document.querySelector("main");
let illfon_1_1 = document.querySelectorAll(".illustration_1_1");
let illfon_1_2 = document.querySelectorAll(".illustration_1_2");
let illfon_2 = document.querySelectorAll(".illustration_2");
let serialname = document.querySelectorAll(".serialname");
let menu = document.querySelector(".two ul");
let menu_text = menu.querySelector("a");

mainyfon.style.background = "#061E16";


for (const ill of illfon_1_1) {
    ill.style.background = "#313633";
}
for (const ill of illfon_1_2) {
    ill.style.background = "#313633";
}
for (const name of serialname) {
    name.style.color = "white";
}
for (const ill of illfon_2) {
    ill.style.background = "#313633";
}

menu.style.background = "#7F8B90";
menu_text.style.color = "#C3EFF8";

