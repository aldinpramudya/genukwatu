<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .login-img {
            width: 100px; /* Anda dapat menyesuaikan ukuran ini */
            height: auto;
        }
        .form-control::placeholder {
            text-align: center;
        }
        .form-control {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">
                        <img src="img/Logo_Jombang.png" alt="Login Image" class="login-img mb-4">
                        <h2 class="fw-bold mb-2 text-uppercase">Genukwatu</h2>
                        <p class="text-white-50 mb-5">KEC. NGORO KAB. JOMBANG PROV. JAWA TIMUR</p>

                        <form id="loginForm">
                            <div class="form-outline form-white mb-4">
                                <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                            </div>

                            <div class="form-check form-white mb-4">
                                <input class="form-check-input" type="checkbox" id="showPassword" onclick="togglePassword()">
                                <label class="form-check-label" for="showPassword">
                                    Show Password
                                </label>
                            </div>

                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

    function togglePassword() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>

</body>
</html>
