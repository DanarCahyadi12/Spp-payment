const seePasswordBtn = document.querySelector('.wrapper .see-password')
const passwordField = document.querySelector('.password')
//<i class="fa-solid fa-eye-slash"></i>
const SeePassword = () => {
        seePasswordBtn.classList.replace('fa-eye-slash','fa-eye');
        passwordField.classList.remove('active')
        passwordField.setAttribute('type','text')
}

const HideSeePassword = () => {
    
    seePasswordBtn.classList.replace('fa-eye','fa-eye-slash');
    passwordField.classList.add('active')
    passwordField.setAttribute('type','password')
}

const IsSee = () => {
    passwordField.classList.contains('active') ? SeePassword() : HideSeePassword();
}
seePasswordBtn.addEventListener('click',IsSee)