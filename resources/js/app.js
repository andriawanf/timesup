import './bootstrap';
import '../css/app.css';

// navbar
const nav = document.querySelector(".nav");
const navActiveIndicator = document.querySelector(".nav__active-indicator");
const buttons = document.querySelectorAll("button");
let activeButton = document.querySelector(".active");

setIndexKey(buttons);
buttons.forEach(button => {
    button.addEventListener("click", buttonClick);
});

function setIndexKey(arrayOfElements) {
    arrayOfElements.forEach((element, index) => {
        element.index = index;
    });
}

function buttonClick() {
    // Position the text so that it appears to not move with the button width growth
    if (this.index > activeButton.index) {
        nav.classList.remove("slide-right");
        nav.classList.add("slide-left");
    } else {
        nav.classList.remove("slide-left");
        nav.classList.add("slide-right");
    }

    // Animate the active indicator position
    const iconWidth = parseInt(
        getComputedStyle(document.documentElement).getPropertyValue("--icon-width")
    );
    const spaceBetweenIcons = parseInt(
        getComputedStyle(document.documentElement).getPropertyValue(
            "--space-between-icons"
        )
    );
    navActiveIndicator.style.transform = `translateX(${(iconWidth +
        spaceBetweenIcons) *
        this.index}px) translateY(-50%)`;

    // Update the active button
    if (activeButton) activeButton.classList.remove("active");
    this.classList.add("active");
    activeButton = this;
}

// Time and Date
window.setInterval(ut, 1000);
function ut() {
    const weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var d = new Date();
    let day = weekday[d.getDay()];
    // document.getElementById("day").innerHTML = day + ",";
    // document.getElementById("taskDay").innerHTML = day + ",";
    document.getElementById("time").innerHTML = d.toLocaleTimeString('en-US', { hour12: false, });
    document.getElementById("date").innerHTML = d.toLocaleDateString('en-US', { dateStyle: 'full', hour12: false, });
    document.getElementById("taskDate").innerHTML = d.toLocaleDateString('en-US', { dateStyle: 'full', hour12: false, });
}
