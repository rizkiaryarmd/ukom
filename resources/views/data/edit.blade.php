<!DOCTYPE html>
<html>
<head>
    <title>Edit Instansi</title>
</head>
<body>

<div>
    <a href="{{ route('data.index') }}"> Back</a>
</div>

@if ($errors->any())
    <div>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('data.update',$data->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" value="{{ $data->nama }}" required>
    <br>
    <label for="no_telpon">No. Telpon:</label>
    <input type="text" name="no_telpon" id="no_telp" value="{{ $data->no_telpon }}" required>
    <br>
    <label for="instansi">Instansi:</label>
    <input type="text" name="instansi" id="instansi" value="{{ $data->instansi }}" required> <!-- Tambahkan ini -->
    <br>
    <button type="submit">Update</button>
</form>

</body>
</html>