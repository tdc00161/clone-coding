// 회원가입 유효성 검사

const form = document.getElementById('#form');
const email = document.getElementById('#email');
const password = document.getElementById('#password');
const passwordChk = document.getElementById('#passwordchk');
const name = document.getElementById('#name');
const agreed = document.getElementById('#agreed');

const emailE = document.getElementById('#emailE');
const passwordE = document.getElementById('#passwordE');
const passwordChkE = document.getElementById('#passwordChkE');
const nameE = document.getElementById('#nameE');
const agreedE = document.getElementById('#agreed');

const signBtn = document.getElementById('#sign_btn');

form.addEventListener('submit', function(e) {
    if(!validateForm()) {
        e.preventDefault();
    }
});

function validateForm() {
    let validate = true;
    clearErrors();

    if(email.value.trim() === '') {
        validate = false;
        emailE.textContent = '이메일을 입력하세요.';
    } else if(!email.value.includes('@')) {
        validate = false;
        emailE.textContent = '올바른 이메일 주소를 입력하세요.';
    } else if(email.value.length >= 50) {
        validate = false;
        emailE.textContent = '50자 이하로 입력해주세요.';
    }






}

function clearErrors() {
    emailE.textContent = '';
    passwordE.textContent = '';
    passwordChkE.textContent = '';
    nameE.textContent = '';
    agreedE.textContent = '';
}