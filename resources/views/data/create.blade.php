<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>

<div>
    <a href="{{ route('data.index') }}"> Kembali </a>
</div>

@if ($errors->any())
    <div>
        <strong></strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('data.store') }}" method="POST">
    @csrf

    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
    <br>
    <label for="no_telpon">No. Telp:</label>
    <input type="text" name="no_telpon" id="no_telpon" required>
    <br>
    <label for="instansi">instansi:</label>
    <input type="text" name="instansi" id="instansi" required>
    <br>
    <button type="submit">Submit</button>
</form>

</body>
</html>