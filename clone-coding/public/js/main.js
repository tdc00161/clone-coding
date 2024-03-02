// 'use strict'; //엄격모드

const PersonBtn = document.getElementsByClassName('underline');
const PersonMd = document.getElementsByClassName('person_modal');

PersonBtn.addEventListener('click', () => {
    
    PersonMd.style.display = "block";

});