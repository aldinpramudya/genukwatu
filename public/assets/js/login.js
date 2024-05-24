// document.getElementById('loginForm').addEventListener('submit', function (event) {
//     event.preventDefault();

//     var formData = new FormData(this);

//     fetch('/login', {
//         method: 'POST',
//         headers: {
//             'Accept': 'application/json',
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify({
//             username: formData.get('username'),
//             password: formData.get('password'),
//             _token: formData.get('_token')
//         })
//     })
//         .then(response => response.json())
//         .then(data => {
//             console.log('Success:', data);
//             if (data.success) {
//                 window.location.href = data.redirect;
//             } else {
//                 alert(data.error || 'Login gagal');
//             }
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             alert('Terjadi kesalahan. Silakan coba lagi.');
//         });
// });

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
