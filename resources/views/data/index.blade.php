<div class="container py-4 px-5 lg-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <div class="mb-4">
                        <div class="card-header">List Buku</div>

                        <div class="card-body">
                            <div class="mb-4">
<div>
    <a href="{{ route('data.create') }}"> Tambah Data</a>
</div>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>No. Telp</th>
        <th>nstansi</th>
    </tr>
    @foreach ($data as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->no_telpon }}</td>
        <td>{{ $data->instansi }}</td>
        <td>
            <form action="{{ route('data.destroy',$data->id) }}" method="POST">
                <a href="{{ route('data.edit',$data->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>