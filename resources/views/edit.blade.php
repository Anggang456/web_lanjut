<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>CRUD</title>
 <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
    <h2><strong>EDIT DATA</strong></h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="font-weight-bold">NIK</label>
                            <input type="number" class="form-control" name="nik" value="{{ old('nik', $penduduk->nik) }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Lengkap</label>
                            <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{ old('nama', $penduduk->nama) }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Pekerjaan</label>
                            <input name="pekerjaan" type="text" class="form-control" placeholder="Masukkan Pekerjaan" value="{{ old('pekerjaan', $penduduk->pekerjaan) }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Saudara</label>
                            <input name="saudara" type="text" class="form-control" placeholder="Masukkan Jumlah Saudara" value="{{ old('saudara', $penduduk->saudara) }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Alamat</label>
                            <input name="alamat" type="text" class="form-control" placeholder="Masukkan Alamat" value="{{ old('alamat', $penduduk->alamat) }}">
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        <button type="back" class="btn btn-md btn-danger " href="/penduduk">BACK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>