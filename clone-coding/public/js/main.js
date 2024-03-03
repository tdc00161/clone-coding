// 'use strict'; //엄격모드

const PersonOpen = document.querySelector('#person');
const PersonClose = document.querySelector('#close_btn');
const modal = document.querySelector('.person_modal');

PersonOpen.addEventListener('click', (e) => {
        if(modal.style.display = 'none') {
            modal.style.display = 'block';
        }
});

PersonClose.addEventListener('click', (e) => {
    if(modal.style.display = 'block') {
        modal.style.display = 'none';
    }
});
