url = `${window.location.protocol}//${window.location.hostname}/wordpress/wp-content/QL_Du_An`;
var now = new Date();

const milisenconds = 1000;
const time = 3600;
const expireTime = time * milisenconds * 2;

// enviroment_variables = null;

// var xmlHttpRequest = new XMLHttpRequest();
// xmlHttpRequest.onload = ()=>{
//     var result = xmlHttpRequest.responseText;
//     enviroment_variables = JSON.parse(result)
//     console.log(enviroment_variables);
// }

// xmlHttpRequest.open('GET', `${url}//enviroment_variables.php?format=json`);
// xmlHttpRequest.send();


body = document.querySelector('body');
navbars = document.querySelectorAll('aside');

body.style.backgroundImage = `url("${window.location.protocol}//${window.location.hostname}/wordpress/wp-content/QL_Du_An/resources/login_img/anh1.png")`;
body.style.backgroundRepeat = 'no-repeat';
body.style.backgroundSize = 'cover';

for(var navbar of navbars){
    navbar.style.display = 'none';

    // navbar.style.visibility = 'hidden';
    navbar.style.width = '0px';
    navbar.style.borderWidth = "0 0 0 0";
    navbar.classList.remove("wp-container-content-3");
}


document.querySelector("#form-login").addEventListener("submit", function(e){
    e.preventDefault();

    var username = e.target.elements.namedItem("username").value;
    var password = e.target.elements.namedItem("password").value;

    const formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);

    var xmlHttpRequest = new XMLHttpRequest();
    xmlHttpRequest.addEventListener('load', ()=>{

        var result = xmlHttpRequest.responseText;

        console.log(result);

        if(JSON.parse(result).length == 0 ){
            document.querySelector('#alert-login').style.display = 'block';
            return;
        }

        e.target.submit();

        var now = new Date();
        now.setTime(now.getTime() + expireTime);

        // Bảo mật JWT token giải mã
        /////
        
        document.cookie = `username=${result}; expires=${now.toUTCString()}; path=/`;
    });

    xmlHttpRequest.addEventListener('error', ()=>{  });

    xmlHttpRequest.open('POST', `${window.location.protocol}//${window.location.hostname}/wordpress/wp-content/QL_Du_An/controllers/login.php`);
    xmlHttpRequest.send(formData);
});