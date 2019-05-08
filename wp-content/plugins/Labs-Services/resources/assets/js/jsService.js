let allIcons = document.getElementsByClassName("allIcons")

const removeClass = () => {
    for (const  icon of allIcons) {
        icon.classList.remove("iconActive");
    }
};

let input = document.getElementById("icone-choic");

for (const icon of allIcons) {
    icon.addEventListener('click' , () => {
        input.value = icon.classList[0];

        removeClass();
        icon.classList.toggle("iconActive");
    })
}

