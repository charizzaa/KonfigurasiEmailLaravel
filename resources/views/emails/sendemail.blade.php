<!DOCTYPE html>
<html>
<head>
    <title>Charizza's Profile Page</title>
</head>
<body>
    <p>Halo, {{ $userData['name'] }}!</p>
    <p>Anda telah berhasil terdaftar di Aplikasi Kami. Berikut adalah detail akun Anda:</p>
    <ul>
        <li>Nama Pengguna: {{ $userData['name'] }}</li>
        <li>Alamat Email: {{ $userData['email'] }}</li>
    </ul>
    <p>Simpan informasi ini dengan aman. Jika Anda memerlukan bantuan, jangan ragu untuk menghubungi tim dukungan kami.</p>
    <p>Terima kasih telah bergabung dengan Aplikasi Kami.</p>
    <br>
    <br>
    <p>Salam,</p>
    <p>Tim Aplikasi</p>
</body>
</html>