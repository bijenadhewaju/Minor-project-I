// JavaScript to toggle dropdown container on user icon click
document.getElementById('userIcon').addEventListener('click', function () {
  var dropdownContainer = document.getElementById('dropdownContainer');
  if (dropdownContainer.style.display === 'block') {
    dropdownContainer.style.display = 'none';
  } else {
    dropdownContainer.style.display = 'block';
  }
});

function showLoginForm() {
  const loginContainer = document.getElementById('loginContainer');
  const bookUploadContainer = document.getElementById('bookUploadContainer'); // Get the book upload container

  // Reset the book upload form fields
  const bookUploadForm = document.getElementById("bookUploadForm");
  bookUploadForm.reset();

  loginContainer.style.display = 'flex'; // Show the login container
  bookUploadContainer.style.display = 'none'; // Hide the book upload form
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
  if (lemail.length > 20) {
    emailErrormsg.innerHTML = 'Email length should not exceed 20 characters.';
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

function showRegisterForm() {
  const loginContainer = document.getElementById('loginContainer');
  const registerContainer = document.getElementById('registerContainer');
  loginContainer.style.display = 'none'; // Hide the login container
  bookUploadForm.style.display = 'none';
  registerContainer.style.display = 'flex'; // Show the registration container
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


function showUploadBookForm() {
  const loginContainer = document.getElementById('loginContainer');
  const bookUploadContainer = document.getElementById('bookUploadContainer');

  // Reset the book upload form fields
  const bookTitle = document.getElementById("bookTitle");
  const author = document.getElementById("author");
  const description = document.getElementById("description");
  const coverImage = document.getElementById("coverImage");

  bookTitle.value = ""; // Clear the title field
  author.value = "";    // Clear the author field
  description.value = "";// Clear the description field
  coverImage.value = ""; // Clear the cover image selection

  // Hide the login form if it's currently displayed
  loginContainer.style.display = 'none';

  // Show the book upload form
  bookUploadContainer.style.display = 'flex';
}

// Function to hide the book upload form
function hidebookUploadForm() {
  const bookUploadContainer = document.getElementById('bookUploadContainer');
  bookUploadContainer.style.display = 'none';
}


// Define an array of book objects
const books = [
  {
    title: "Database Management Systems",
    author: "By Abhram Silberschatz, Henry F. Korth, S. Sudarshan",
    image: "../assets/db.jpg",
  },
  {
    title: "Applying UML and Patterns",
    author: "By Craig Larman",
    image: "../assets/ul.jpg",
  },
  {
    title: "Engineering Mathematics II",
    author: "By Dr.D.D Dharma,Toya Narayan Poudel,Hari Prasad Adhikari",
    image: "../assets/EMII.jpg",
  },
  {
    title: "Engineering Mathematics III",
    author: "By Toya Narayan Poudel",
    image: "../assets/EMIII.jpg",
  },
  {
    title: "Computer Systems Organization and Architecture",
    author: "By John D Carpenelli",
    image: "../assets/COA.jpg",
  },
  {
    title: "A Textbook of C Programming",
    author: "By Babu Ram Dawadi, Ram Datta Bhatta",
    image: "../assets/c-programming.png",
  },
  // Add more book objects as needed
];

function generateBooks() {
  const bookContainer = document.querySelector(".bookcontainer");

  books.forEach((book) => {
    const bookItem = document.createElement("div");
    bookItem.classList.add("bookItem");

    const bookLink = document.createElement("a");
    bookLink.href = "db.html";

    const bookImage = document.createElement("img");
    bookImage.src = book.image;
    bookImage.alt = book.title;

    const titleElement = document.createElement("h2");
    titleElement.classList.add("booktitle");
    titleElement.textContent = book.title;

    const authorElement = document.createElement("p");
    authorElement.classList.add("author");
    authorElement.textContent = "By " + book.author;


    bookLink.appendChild(bookImage);
    bookItem.appendChild(bookLink);
    bookItem.appendChild(titleElement);
    bookItem.appendChild(authorElement);

    bookContainer.appendChild(bookItem);
  });

}

// Call the function to generate books
generateBooks();

