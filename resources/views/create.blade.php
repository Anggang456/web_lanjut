<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>CREATE DATA</h2>
                </div>
            <div class="pull-right">
                
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
    </div>
    @endif
        <form action="{{ route('penduduk.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIK :</strong>
                    <input type="text" name="nik" class="form-control" placeholder="NIK">
                    @error('nik')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Lengkap :</strong>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                            @error('nama')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pekerjaan :</strong>
                        <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                            @error('pekerjaan')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Saudara :</strong>
                        <input type="text" name="saudara" class="form-control" placeholder="Jumlah Saudara">
                            @error('saudara')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>  
                    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat :</strong>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                            @error('alamat')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>  
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
                <a class="btn btn-warning" href="{{ route('penduduk.index') }}"> Back</a>
            </div>
</form>
</body>
</html>