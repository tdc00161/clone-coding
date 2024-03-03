const User = document.getElementById('user_btn');
const UserMenu = document.getElementById('user');

User.addEventListener('click',(e)=>{
    console.log(e.target);
    UserMenu.style.display = "block";
    if(UserMenu.has(e.target).length === 0) {
        UserMenu.style.display = "none";
    }
    console.log(UserMenu.has(e.target).length === 0);

});