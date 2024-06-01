document.querySelector('aside + div').classList.add('flex-grow-[1]');

overlayElements = document.querySelectorAll('.overlay');
overlayChangePasswordContainerElement = document.querySelector('.overlay.change-password-container');
overlayStateChangePasswordElement = document.querySelector('.overlay.state-change-password');

overlayElements.forEach(element => {
    element.addEventListener('click', function(e) {
        const overlay = e.target;
    
        if(e.target === e.currentTarget){
            overlay.classList.toggle('hidden');
        }
    });
}); 

document.querySelector('#btn-change-password').addEventListener('click', function(e) {
    overlayChangePasswordContainerElement.classList.toggle('hidden');
});

const inputPasswordElements = document.querySelectorAll('.input-password');
inputPasswordElements.forEach((element)=>{
    element.addEventListener('keypress', function(e){
        const inputPassword = e.target;
        if(inputPassword.value.length > 16){
            e.preventDefault();
        }
    });
});

const verifyPasswordElement = document.querySelector('#verify-password');
const newPasswordElement = document.querySelector('#new-password');
const currentPasswordElement = document.querySelector('#current-password');

document.querySelector('#form-password').addEventListener('submit', function(e) {
    if(verifyPasswordElement.value != newPasswordElement.value || verifyPasswordElement.value == "" || newPasswordElement == "" || currentPasswordElement == ""){
        e.preventDefault();
        document.querySelector('#alert-change-password').classList.remove('hidden');
    }
});

