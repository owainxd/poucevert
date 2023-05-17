function togglePasswordVisibility() {
  var passwordInput = document.getElementById("passwordInput");
  var passwordToggle = document.getElementById("passwordToggle");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    passwordToggle.innerText = "Cacher";
  } else {
    passwordInput.type = "password";
    passwordToggle.innerText = "Afficher";
  }
}