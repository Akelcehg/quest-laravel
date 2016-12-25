function setNav() {
    alert("dsa");
    var x = document.getElementById("navigation");
    if (x.className === "nav-menu") {
        x.className += " responsive";
    } else {
        x.className = "nav-menu";
    }
}
