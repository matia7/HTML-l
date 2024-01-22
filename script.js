document.addEventListener('DOMContentLoaded', function () {
    var jobApplicationForm = document.getElementById('jobApplicationForm');

    jobApplicationForm.addEventListener('submit', function (event) {
        // You can add client-side validation here if needed
        // Example: Check if email is valid before submitting
        var emailInput = document.getElementById('email');
        if (!isValidEmail(emailInput.value)) {
            alert('Ju lutemi vendosni nje adrese emaili te vlefshme.');
            event.preventDefault(); // Prevent form submission
        }
    });

    function isValidEmail(email) {
        // Add your email validation logic here
        // For simplicity, we are using a basic example
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
