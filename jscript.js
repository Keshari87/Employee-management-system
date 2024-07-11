const wrapper =document.querySelector('.wrapper');
const loginLink =document.querySelector('.login-link');
const registerLink =document.querySelector('.register-link');
const login=document.querySelector('.login');
const register=document.querySelector('.register');

registerLink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});
loginLink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
});
login.addEventListener('click',()=>{
    wrapper.classList.add('active-login');
});
register.addEventListener('click',()=>{
    wrapper.classList.add('active-login');
});