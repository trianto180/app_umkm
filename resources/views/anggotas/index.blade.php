@extends('master.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Anggota UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Anggota UMKM</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Halaman Anggota UMKM</h3>
              </div>
              <!-- /.card-header harus membuat model fillable--> 
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Kategori UMKM</th>
                    <th>Nama UMKM</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Foto</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($anggotaumkms as $anggota)
                  <tr>
                    <td>{{ $anggota->kategoriumkm->nama_kategori }}</td>
                    <td>{{ $anggota->nama_umkm }}</td>
                    <td>{{ $anggota->email }}</td>
                    <td>{{ $anggota->alamat }}</td>
                    <td>{{ $anggota->no_hp }}</td>
                    <td>{{ $anggota->foto }}</td>
                    <td><button type="button" class="btn btn-danger">Danger</button></td>
                    <td><button type="button" class="btn btn-primary">Primary</button></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection