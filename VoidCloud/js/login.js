let modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function openLogin() {
    document.getElementById('id01').style.display='block', style="width:auto;";
}

function closeLogin(){
    document.getElementById('id01').style.display='none'
}

function togglepwvis(){
    let inputfield = document.getElementById("passwordinput");
    if (inputfield.type === "password") {
        inputfield.type = "text";
    } else {
        inputfield.type = "password";
    }
    let icon = document.getElementById("passwordicon");
    if (inputfield.type === "password") {
        icon.className = "far fa-eye hidepw"
    } else {
        icon.className = "far fa-eye-slash hidepw"
    }
}