// select variabel id input form
const signUpForm = document.getElementById('signUpForm');
const errorMessage = document.getElementById('errorMessage');

// membaaca tombol submit
signUpForm.addEventListener('submit', function (e) {
    
    // event handling untuk mencengah form dikirim dalam keadaan kosong
    e.preventDefault();

    // value input
    const username = document.getElementById('username').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // error message
    let error = '';

    // Validasi inputan username
    if (username === '') {
        error = 'Username is required.';
    }
    // Validasi inputan email
    else if (!validateEmail(email)) {
        error = 'Invalid email format.';
    }
    // Validasi panjang password
    else if (password.length < 6) {
        error = 'Password must be at least 6 characters long.';
    }
    // Validate confirm password
    else if (password !== confirmPassword) {
        error = 'Passwords do not match.';
    }

    // Display error message if any
    if (error) {
        errorMessage.textContent = error;
        errorMessage.style.display = 'block';
        return;
    }

    // No errors, submit the form
    errorMessage.style.display = 'none';
    signUpForm.submit(); // Submit to server
});

// Helper function to validate email
function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}
