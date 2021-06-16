/*
let toggle = document.getElementById("toggler");
let toggler = false
toggle.addEventListener('click', (e)=> {

    toggler = !toggler
     let slide = document.getElementById('slide')
    if (toggler) {
        slide.style.width = '410px';
        toggle.toggleClass('gamebar-open');
        toggle.innerHTML = `<i class="fas fa-caret-left"></i>`
    } else {
        slide.style.width = 0;
        toggle.innerHTML = `<i class="fas fa-caret-right"></i>`
    }
})
*/
/*
let toggler = false
let toggle = document.getElementById('toggler');
let slide = document.getElementById('slide');
toggle.addEventListener('click', (e)=> {
    toggler = !toggler;
    if(toggler){
        slide.classList.add('gamebar-open');
        toggle.firstElementChild.classList.remove('fa-caret-right');
        toggle.firstElementChild.classList.add('fa-caret-left');
    }
    else{
        slide.classList.remove('gamebar-open');
        toggle.firstElementChild.classList.remove('fa-caret-left');
        toggle.firstElementChild.classList.add('fa-caret-right');
    }
});
*/
function toggleClass(num){
    if(num){

    }
}


document.querySelector('.toggle').addEventListener('click',(e)=>{
    // if(document.querySelector('.gamebar').clientWidth === 0){
    if(document.querySelector('.gamebar').classList.contains('gamebar-open')){
        document.querySelector('.gamebar').classList.remove('gamebar-open');
        document.querySelector('.toggle').firstElementChild.classList.add('fa-caret-right');
        document.querySelector('.toggle').firstElementChild.classList.remove('fa-caret-left');
    }
    else{
        document.querySelector('.gamebar').classList.add('gamebar-open');
        document.querySelector('.toggle').firstElementChild.classList.add('fa-caret-left');
        document.querySelector('.toggle').firstElementChild.classList.remove('fa-caret-right');
    }
});
