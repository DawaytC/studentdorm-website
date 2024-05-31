// Function to handle opening and closing forms
function toggleForm() {
    var loginForm = document.getElementById('login-form');
    var signUpForm = document.getElementById('signup-form');
    if (loginForm.style.display === 'none') {
        loginForm.style.display = 'block';
        signUpForm.style.display = 'none';
    } else {
        loginForm.style.display = 'none';
        signUpForm.style.display = 'block';
    }
}

// Function to open the reset password modal
function openResetPasswordModal() {
    document.getElementById('forgotPasswordModal').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

function closeResetPasswordModal() {
    document.getElementById('forgotPasswordModal').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

function openSetNewPasswordModal() {
    document.getElementById('setNewPasswordModal').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

function closeSetNewPasswordModal() {
    document.getElementById('setNewPasswordModal').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

// Event listener for reset password form submission
document.getElementById('resetPasswordForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Check if the email field is empty
    const emailInput = document.getElementById('resetEmail');
    if (!emailInput.value.trim()) {
        alert('Please fill in the email address.');
        return; // Exit the function if the email field is empty
    }
    // After successful send email, you can redirect the user to set new password window
    alert('The reset password has been sent to your email.');
    // Close the modal
    closeResetPasswordModal();
    // Optionally, open the set new password modal
    openSetNewPasswordModal();
});

// Event listener for set new password form submission
document.getElementById('newPasswordForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Check if the password fields are empty
    const newPasswordInput = document.getElementById('newPassword');
    const confirmNewPasswordInput = document.getElementById('confirmNewPassword');
    if (!newPasswordInput.value.trim() || !confirmNewPasswordInput.value.trim()) {
        alert('Please fill in both password fields.');
        return;
    }

    if (newPasswordInput.value !== confirmNewPasswordInput.value) {
        alert('Passwords do not match.');
        return;
    }

    // Here you can implement logic to set the new password
    // After successful password change, you can redirect the user or perform any other action
    alert('Password successfully changed!');
    // Close the modal
    closeSetNewPasswordModal();
});

// Function to handle overlay click event
document.getElementById('overlay').addEventListener('click', function() {
    // Close the reset password modal if it's open
    closeResetPasswordModal();
    // Close the set new password modal if it's open
    closeSetNewPasswordModal();
});
