const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');
const navbar = document.querySelector('.navbar');
const footer = document.querySelector('footer');
const pheading = document.querySelector('.pheading');
const menu = document.querySelector('.menu , .menu li a');
const dom = document.querySelector('.logo');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');

    if(this.classList.toggle('bi-brightness-high-fill')){
        var konfirmasi = confirm("Berpindah ke light mode?");

        if(konfirmasi==true){
            body.style.background = '#F8EDE3';
            body.style.color = 'black';
            body.style.transition = '1s';
            
            navbar.style.background = '#D0B8A8';
            navbar.style.transition = '1s';

            footer.style.background = '#D0B8A8';
            footer.style.transition = '1s';

            pheading.style.color = '#7D6E83';
            pheading.style.transition = '1s';

            menu.style.background = '#D0B8A8';
            menu.style.transition = '1s';
        }else{
            alert("GAGAL!");
        }
    }else{
        var konfirmasi = confirm("Berpindah ke darkmode?");

        if(konfirmasi==true){
            body.style.background = '#2B2B2B';
            body.style.transition = '1s';

            navbar.style.background = '#423F3E';
            navbar.style.transition = '1s';

            footer.style.background = '#423F3E';
            footer.style.transition = '1s';

            pheading.style.color = '#a80d1d';
            pheading.style.transition = '1s';

            menu.style.background = '#362222';
            menu.style.transition = '1s';
        }else{
            alert("GAGAL!");
        }       
    }   
});

function inn(){
    dom.style.background = '#362222';
}
function out(){
    dom.style.background= 'transparent'
}
document.getElementById('dom1').addEventListener('mouseover', inn);
document.getElementById('dom1').addEventListener('mouseout', out);