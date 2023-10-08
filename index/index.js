function showLoginForm() {
  const loginContainer = document.getElementById('loginContainer');
  loginContainer.style.display = 'flex'; // Show the login container
  registerContainer.style.display = 'none';
}
function validateLoginForm() {

  const lemail = document.getElementById('email').value;
  const lpassword = document.getElementById('myPassword').value;
  const emailErrormsg = document.getElementById('emailErrormsg'); // Error message for email
  const passwordErrormsg = document.getElementById('passwordErrormsg'); // Error message for password
  const errorMsg = document.getElementById('errorMsg'); // General error messages container


  // Clear previous error messages
  emailErrormsg.innerHTML = '';
  passwordErrormsg.innerHTML = '';
  errorMsg.innerHTML = '';
  if (email.length > 30) {
    emailErrormsg.innerHTML = 'Email length should not exceed 30 characters.';

  }

  if (!isStrongPassword(lpassword)) {
    passwordErrormsg.innerHTML = 'Password is weak';

  }
  return (

    emailErrormsg.innerHTML === '' &&
    passwordErrormsg.innerHTML === '' &&
    errorMsg.innerHTML === ''
  ); // Submit the form only if there are no error messages
}
function isStrongPassword(lpassword) {
  const strongRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  return strongRegex.test(lpassword);
}
function isValidEmail(lemail) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(lemail);
}


// validate registration Form
function validateRegistrationForm() {
  const username = document.getElementById('Username').value;
  const email = document.getElementById('Email').value;
  const password = document.getElementById('Password').value;
  const confirmPassword = document.getElementById('ConfirmPassword').value;
  const usernameError = document.getElementById('usernameError'); // Error message for username
  const emailError = document.getElementById('emailError'); // Error message for email
  const passwordError = document.getElementById('passwordError'); // Error message for password
  const confirmPasswordError = document.getElementById('confirmPasswordError'); // Error message for confirm password
  const errorMessages = document.getElementById('errorMessages'); // General error messages container

  // Clear previous error messages
  usernameError.innerHTML = '';
  emailError.innerHTML = '';
  passwordError.innerHTML = '';
  confirmPasswordError.innerHTML = '';
  errorMessages.innerHTML = '';

  if (username.length < 6) {
    usernameError.innerHTML = 'Username must be at least 6 characters long.';

  }

  if (email.length > 30) {
    emailError.innerHTML = 'Email length should not exceed 20 characters.';

  }

  if (!isStrongPassword(password)) {
    passwordError.innerHTML = 'Password is weak';

  }

  if (password !== confirmPassword) {
    confirmPasswordError.innerHTML = 'Passwords do not match.';

  }

  return (
    usernameError.innerHTML === '' &&
    emailError.innerHTML === '' &&
    passwordError.innerHTML === '' &&
    confirmPasswordError.innerHTML === '' &&
    errorMessages.innerHTML === ''
  ); // Submit the form only if there are no error messages
}

function isStrongPassword(password) {
  const strongRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  return strongRegex.test(password);
}

function hideLoginForm() {
  const loginContainer = document.getElementById('loginContainer');
  loginContainer.style.display = 'none'; // Hide the login container
}

function hideRegisterForm() {
  const registerContainer = document.getElementById('registerContainer');
  registerContainer.style.display = 'none'; // Hide the registration container
}

function showRegisterForm() {
  const loginContainer = document.getElementById('loginContainer');
  const registerContainer = document.getElementById('registerContainer');
  loginContainer.style.display = 'none'; // Hide the login container
  registerContainer.style.display = 'flex'; // Show the registration container
}

function togglePasswordVisibility(passwordId, toggleId) {
  const passwordInput = document.getElementById(passwordId);
  const toggleIcon = document.getElementById(toggleId);

  if (passwordInput.getAttribute('type') === 'password') {
    passwordInput.setAttribute('type', 'text');
    toggleIcon.innerHTML = '&#128064;'; // Change the eye icon to a slash
  } else {
    passwordInput.setAttribute('type', 'password');
    toggleIcon.innerHTML = '&#128065;'; // Change the slash back to the eye icon
  }
}




