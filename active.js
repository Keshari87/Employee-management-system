const nav =document.querySelectorAll('.sidebar');
const windowPathname = window.location.pathname;

nav.forEach(nav =>{
    if(nav.href.incldes(windowPathname)){
        nav.classList.add('active');
    }
})