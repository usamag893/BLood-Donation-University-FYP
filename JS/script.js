document.getElementById('loginButton').addEventListener('click', function () {
  window.location.href = 'login.php';
});
document.getElementById('signUpButton').addEventListener('click', function () {
  window.location.href = 'signup.php';
});
document.getElementById('HomePage').addEventListener('click', function () {
  window.location.href = 'index.html';
});

function checkPassword() {
  let password = document.getElementById('password').value;
  let cnfrmPassword = document.getElementById('cnfrm-password').value;
  let message = document.getElementById('message');
  let submitButton = document.getElementById('btn-submit');
  console.log(password, cnfrmPassword);

  if (password.length != 0) {
    if (password == cnfrmPassword) {
      message.textContent = 'Passwords match';
      message.style.display = 'block';
      message.style.backgroundColor = '#3ae374';
      submitButton.removeAttribute('disabled');
    } else {
      submitButton.setAttribute('disabled', 'true');
      message.textContent = 'Passwords Do not match';
      message.style.backgroundColor = '#ff4d4d';
      message.style.display = 'block';
    }
  }
}
const agreeCheckbox = document.getElementById('agreeCheckbox');
agreeCheckbox.addEventListener('change', function () {
  if (agreeCheckbox.checked) {
    submitButton.removeAttribute('disabled');
  } else {
    submitButton.setAttribute('disabled', 'true');
  }
});




