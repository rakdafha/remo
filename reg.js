
        function toggleFormContainer() {
            var loginContainer = document.getElementById('login-container');
            var registerContainer = document.getElementById('register-container');
            if (loginContainer.style.display === 'none' && registerContainer.style.display === 'none') {
                loginContainer.style.display = 'block';
            } else {
                loginContainer.style.display = 'none';
                registerContainer.style.display = 'none';
            }
        }

        function toggleForm() {
            var loginContainer = document.getElementById('login-container');
            var registerContainer = document.getElementById('register-container');
            if (loginContainer.style.display === 'none') {
                loginContainer.style.display = 'block';
                registerContainer.style.display = 'none';
            } else {
                loginContainer.style.display = 'none';
                registerContainer.style.display = 'block';
            }
        }