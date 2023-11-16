document.addEventListener('DOMContentLoaded', function() {
    function isEmailValid(email) {
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        return emailPattern.test(email);
    }

    const signinForm = document.querySelector('#signinForm');
    const signupForm = document.querySelector('#signupForm');

    if (signinForm) {
        signinForm.addEventListener('submit', function(event) {
            const emailInput = signinForm.querySelector('input[name="email"]');
            const passwordInput = signinForm.querySelector('input[name="password"]');
            let isValid = true;

            if (!isEmailValid(emailInput.value)) {
                alert('Please enter a valid email address.');
                isValid = false;
            }

            if (passwordInput.value.trim() === '') {
                alert('Password is required.');
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault(); 
            }
        });
    }

    if (signupForm) {
        signupForm.addEventListener('submit', function(event) {
            const emailInput = signupForm.querySelector('input[name="email"]');
            const passwordInput = signupForm.querySelector('input[name="password"]');
            let isValid = true;

            if (!isEmailValid(emailInput.value)) {
                alert('Please enter a valid email address.');
                isValid = false;
            }

            if (passwordInput.value.trim() === '') {
                alert('Password is required.');
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault();
            }
        });
    }
});
