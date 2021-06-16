let gbox_main = document.getElementById("gbox-main");
let boxes = ``;
for (let i = 0; i < 100; i++) {
    boxes += `
    <div class="inputbox box${i}">
        <span><label for="">${i}</label></span>
    </div>
    `;
}

gbox_main.innerHTML = boxes;

let vol = document.getElementById("vol");
let volume = true;
vol.innerHTML = `<i class="fas fa-volume-up"></i>`;

vol.addEventListener("click", (e) => {
    volume = !volume;
    if (volume) {
        vol.innerHTML = `<i class="fas fa-volume-up"></i>`;
    } else {
        vol.innerHTML = `<i class="fas fa-volume-mute"></i>`;
    }
});


