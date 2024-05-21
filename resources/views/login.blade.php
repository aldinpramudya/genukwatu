<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form id="loginForm">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit">Login</button>
    </form>

    <script>
      document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('/api/auth/login', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF token jika menggunakan Laravel Blade
        },
        body: JSON.stringify({
            username: formData.get('username'),
            password: formData.get('password')
        })
    })
    .then(response => response.json())
    .then(data => {
        // Jika login berhasil, simpan token dalam cookie
        if (data.token) {
            document.cookie = `jwt_token=${data.token}; path=/`;
            window.location.href = '/data-kependudukanadmin'; // Redirect ke halaman data-kependudukanadmin
        } else {
            alert(data.error || 'Login failed');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
});
    </script>
</body>
</html>
