var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function() {
    el.classList.toggle("toggled")
};

const currentLocation = location.href;
const menuItem = document.querySelectorAll(".sidebar a");
const menuLength = menuItem.length;

for(var i = 0; i<menuLength; i++){
    if(menuItem[i].href === currentLocation){
        menuItem[i].className = "active";
    }
}