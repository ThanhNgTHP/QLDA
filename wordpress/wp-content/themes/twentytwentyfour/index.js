// aside1 = document.querySelector('aside:nth-of-type(1)');
// nav1 = document.querySelector('aside:nth-of-type(1) > :first-child');
// nav1.style.width = `${aside1.offsetWidth}px`;


// aside2 = document.querySelector('aside:nth-of-type(2)');
// nav2 = document.querySelector('aside:nth-of-type(2) > :first-child');
// nav2.style.width = `${aside2.offsetWidth}px`;

// window.addEventListener('scroll', ()=>{
//     let scrollYWindow = window.scrollY;
//     let offsetTopElement = nav1.offsetTop;
//     let offsetBottomElement = nav1.offsetTop + nav1.offsetHeight;

//     if(offsetTopElement - scrollYWindow < 0){
//         nav1.classList.add('fixed');
//         nav1.style.top = '0';
//         nav1.style.bottom = '0';
//         nav1.style.left = '0';

//         // nav2.classList.add('fixed');
//         // nav2.style.top = '0';
//         // nav2.style.bottom = '0';
//         // nav2.style.right = '0';

//         // aside2.style.width = nav2.style.width;
//     }
//     else{
//         nav1.classList.remove('fixed');
//         // nav2.classList.remove('fixed');
//     }
// });

const loading = document.querySelector('.loading');
window.onload = ()=>{
    loading.style.display = 'none';
    document.querySelectorAll('html, body').forEach(element => {
        element.style.overflow = 'visible';
    });
}


aside1 = document.querySelector('aside:nth-of-type(1)');
aside2 = document.querySelector('aside:nth-of-type(2)');

content = document.querySelector('.content');

aside1.style.height = `${content.offsetHeight}px`;
aside2.style.height = `${content.offsetHeight}px`;

btnLogout = document.querySelector('.log-out');
btnLogout.addEventListener('click', function(){
    deleteCookie('username');
    window.location.reload();
});

function deleteCookie(name, path = '/') {
    let cookieString = `${name}=; Max-Age=-99999999; path=${path};`;
    document.cookie = cookieString;
}

const divElements = document.querySelectorAll("div");
const copyrightXYZ = divElements[divElements.length - 1];
copyrightXYZ.style.display = 'none';


// main = document.querySelector('header + div');
// main.style.flexWrap = 'wrap';
