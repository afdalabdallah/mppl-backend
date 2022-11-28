// dropdown size show/hide

const dropdown = document.getElementById("dropdown");
const dropdownMenu = document.getElementById("dropdown-menu");

dropdown.addEventListener("click", () => {
    dropdownMenu.classList.toggle("hidden");
});

// replace &nbsp with selected size on click

const sizeOptions = document.getElementsByClassName("option");
const sizeDropdown = document.getElementsByClassName("size-dropdown");

for (let i = 0; i < sizeOptions.length; i++) {
    sizeOptions[i].addEventListener("click", () => {
        sizeDropdown[0].innerHTML = sizeOptions[i].innerHTML;
    });
}
