<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="icon" type="image/jpg" href="{{ asset('img/Logo_Jombang.jpg') }}">
    <title>Form Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
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
                                    Tampilkan Password
                                </label>
                            </div>

                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        </form>

                        <button class="btn btn-outline-light btn-lg px-5 mt-3" onclick="goBack()">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src={{ asset('assets/js/login.js') }}></script>

</body>
</html>
