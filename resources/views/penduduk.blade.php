<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>CRUD</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Data Penduduk </h2>
                </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('penduduk.create') }}"> Tambah Data</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Pekerjaan</th>
                        <th>Jumlah Saudara</th>
                        <th>Alamat</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($penduduk as $penduduk)
                    <tr>
                        <td>{{ $penduduk->id }}</td>
                        <td>{{ $penduduk->nik }}</td>
                        <td>{{ $penduduk->nama }}</td>
                        <td>{{ $penduduk->pekerjaan }}</td>
                        <td>{{ $penduduk->saudara }}</td>
                        <td>{{ $penduduk->alamat }}</td>
                    <td>
                    <form action="{{ route('penduduk.destroy',$penduduk->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('penduduk.edit',$penduduk->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
</table>
</body>
</html>