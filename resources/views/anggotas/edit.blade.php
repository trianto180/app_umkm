@extends('master.app', ['title' => 'Edit Anggota'])

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Anggota</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @include('alert')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Anggota</h3>
              </div>
              <div class="card-body">
                <div class="col-md-6">
                    <form action="/anggotas/update/{{$anggota->id}}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kategori_umkm_id">Kategori UMKM</label>
                            <input type="text" class="form-control @error('nama_umkm') is-invalid @enderror" name="kategori_umkm_id" id="kategori_umkm_id" value="{{ old('nkategori_umkm_id') ?? $anggota->kategori_umkm_id }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_umkm">Nama UMKM</label>
                            <input type="text" class="form-control @error('nama_umkm') is-invalid @enderror" name="nama_umkm" id="nama_umkm" value="{{ old('nama_umkm') ?? $anggota->nama_umkm }}">
                            @error('nama_umkm')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control @error('nama_umkm') is-invalid @enderror" id="email" placeholder="example@example.com" value="{{ old('email') ?? $anggota->email }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control @error('nama_umkm') is-invalid @enderror" name="alamat" id="alamat" value="{{ old('alamat') ?? $anggota->alamat }}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Telp</label>
                            <input type="text" class="form-control @error('nama_umkm') is-invalid @enderror" name="no_hp" id="no_hp" value="{{ old('no_hp') ?? $anggota->no_hp }}">
                            @error('no_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="exampleInputFile">Foto</label>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection