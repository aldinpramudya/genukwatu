<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">
                        <h2 class="fw-bold mb-2 text-uppercase">Registrasi</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-outline form-white mb-4">
                                <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Nama" value="{{ old('name') }}" required />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" value="{{ old('username') }}" required />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" placeholder="Konfirmasi Password" required />
                            </div>

                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Daftar</button>
                        </form>

                        <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-5 mt-3">Kembali ke Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
