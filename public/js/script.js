let login = document.getElementById('login');

login.addEventListener("keyup", function () {
  let val = login.value;
  if (loginValidation(val)) {
    login.classList.add('is-invalid');
  } else {
    login.classList.remove('is-invalid');
  }
});

let form = document.getElementsByTagName('form')[0];
form.onsubmit = function (e) {
  if (loginValidation(login.value)) {
    e.preventDefault();
  }
};

function loginValidation(val) {
  if (val.search(/[*&%$£"]/) >= 0) {
    return true;
  } else {
    return false;
  }
}

let registerForm = document.getElementsByClassName('register-form')[0];
if (registerForm) {
  registerForm.onsubmit = async function(e) {
    e.preventDefault();
    if (!login.classList.contains('is-invalid')) {
      let response = await fetch('helpers/register.php', {
        method: 'POST',
        body: new FormData(registerForm),
        mode:"cors"
      });
      if(response.ok) {
        let json = await response.json();
        alert(json['message']);
      } else {
        alert('HTTP error: ' + response.status );
      }
    }
  };
}
