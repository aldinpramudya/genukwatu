document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('/api/auth/login', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            // 'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF token jika menggunakan Laravel Blade
        },
        body: JSON.stringify({
            username: formData.get('username'),
            password: formData.get('password')
        })
    })
    .then(response => response.json())
    .then(data => {
        // Jika login berhasil, simpan token dalam cookie
        console.log(data);
        if (data.token) {
            document.cookie = `jwt_token=${data.token}; path=/`;
            window.location.href = '/data-kependudukan'; // Redirect ke halaman data-kependudukanadmin
        } else {
            alert(data.error || 'Login gagal');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan. Silakan coba lagi.');
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

function goBack() {
    // Mengarahkan pengguna ke halaman yang diinginkan.
    // Ubah 'URL_Halaman_Yang_Diinginkan' dengan URL halaman yang Anda inginkan.
    window.location.href = '/';
}
