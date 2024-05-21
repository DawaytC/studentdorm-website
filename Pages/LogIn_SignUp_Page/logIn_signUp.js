document.querySelector('.img-btn').addEventListener('click', function() {
    // Toggle the signup process directly
    document.querySelector('.cont').classList.toggle('s-signup');

});

// JavaScript to open and close modals
function openResetPasswordModal() {
    document.getElementById('forgotPasswordModal').classList.add('active');
    const emailInput = document.getElementById('resetEmail');
    emailInput.classList.remove('active');
    document.getElementById('overlay').classList.add('active');
}

// Function to close the reset password modal
function closeResetPasswordModal() {
    document.getElementById('forgotPasswordModal').classList.remove('active');
    document.getElementById('overlay').classList.remove('active');
}

function openSetNewPasswordModal() {
    const emailInput = document.getElementById('resetEmail');
    // Check if the email field is empty
    if (!emailInput.value.trim()) {
        alert('Please fill in the email address first.');
        return; // Exit the function if the email field is empty
    }

    const resetPasswordModal = document.getElementById('forgotPasswordModal');
    resetPasswordModal.classList.remove('active');

    const setNewPasswordModal = document.getElementById('setNewPasswordModal');
    setNewPasswordModal.classList.add('active');

    document.getElementById('overlay').classList.add('active'); // Add active class to overlay
}

function closeSetNewPasswordModal() {
    document.getElementById('setNewPasswordModal').classList.remove('active');
    document.getElementById('overlay').classList.remove('active');
}

// Event listener for reset password button click
document.getElementById('resetPasswordForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Check if the email field is empty
    const emailInput = document.getElementById('resetEmail');
    if (!emailInput.value.trim()) {
        alert('Please fill in the email address.');
        return; // Exit the function if the email field is empty
    }

    // If the email field is filled, open the set new password modal
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

    // Here you can implement logic to set the new password
    // After successful password change, you can redirect the user or perform any other action
    alert('Password successfully changed!');
    // Close the modal
    const setNewPasswordModal = document.getElementById('setNewPasswordModal');
    closeModal(setNewPasswordModal);
});

