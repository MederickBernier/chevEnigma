function resetRegisterform(){
    e.preventDefault();
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
    document.getElementById("confirmPassword").value = "";
    document.getElementById("fullName").value = "";
    document.getElementById("email").value = "";
}