<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enroll Fingerprint - Smart Door Lock Using Fingerprint & Smoke Detector</title>
    <link rel="stylesheet" href="{{ asset('css/styleenroll.css') }}">
</head>

<body>
    <div class="container">
        <h1>Enroll Fingerprint</h1>
        <br>
        <center>
            <img class="logo" src="{{ asset('logo/finger.png') }}" alt="Logo" width="150" height="150">

            <form action="{{ route('enroll.update', ['id' => $user->id]) }}" method="post">
                @csrf
                @method('patch')
                <label for="name">Nama :</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required>
                <br>
                <br>
                <label for="id_fingerprint">ID Fingerprint 1 - 126 :</label>
                <input type="text" id="id_fingerprint" name="id_fingerprint" value="{{ $user->id_fingerprint }}" required>
                <br>
                <button type="submit">Submit Fingerprint</button>
            </form>

            <button type="button" onclick="window.location.href='/userlist'" class="back-btn">Back to User List</button>
        </center>
    </div>
</body>
</html>
