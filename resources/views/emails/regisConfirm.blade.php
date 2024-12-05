<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Registrasi</title>
</head>
<body>
    <h1>Konfirmasi Registrasi</h1>

    <p>Halo {{ $user->name }},</p>

    <p>Terima kasih telah melakukan registrasi pada aplikasi H-Food Catering. Silakan konfirmasi alamat email Anda dengan mengklik tautan di bawah ini:</p>

    {{-- <p><a href="{{ $confirmation_link }}">{{ $confirmation_link }}</a></p> --}}

    <p>Jika Anda tidak melakukan registrasi, Anda dapat mengabaikan email ini.</p>
    <p>Healthy Food Healthy Life!</p>
    <p>Salam,</p>
    <p>H-Food Catering</p>
</body>
</html>