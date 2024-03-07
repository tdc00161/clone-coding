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

$(document).on('load',function(){
    load('.board_set','12');
    $("#plus_btn").on("click",function(){
        load('.board_set','12','#plus_btn');
    })
});

function load(selector, limit, btnSelector) {
    var $elements = $(selector + ':not(.active)');
    var totalElements = $elements.length;
    var loadCnt = Math.min(limit, totalElements);

    $elements.slice(0, loadCnt).addClass("active");

    if (loadCnt === totalElements && btnSelector) {
        $(btnSelector).hide();
    }
}