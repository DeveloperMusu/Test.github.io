document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    fetch('login.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ username, password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = '/dashboard.php';
        } else {
            document.getElementById('error-message').textContent = 'Invalid username or password';
        }
    });
});

document.getElementById('register-btn').addEventListener('click', function() {
    window.location.href = 'register.php';
});
