import './bootstrap';
import '../css/app.css';
window.setInterval(ut, 1000);

function ut() {
    const weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var d = new Date();
    let day = weekday[d.getDay()];
    // document.getElementById("day").innerHTML = day + ",";
    // document.getElementById("taskDay").innerHTML = day + ",";
    document.getElementById("time").innerHTML = d.toLocaleTimeString('en-US', { hour12: false,});
    document.getElementById("date").innerHTML = d.toLocaleDateString('en-US', { dateStyle: 'full', hour12: false,});
    document.getElementById("taskDate").innerHTML = d.toLocaleDateString('en-US', { dateStyle: 'full', hour12: false,});
}