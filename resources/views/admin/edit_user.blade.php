@extends('admin.layout')
@section('title', 'Ubah User')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah User</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <<li class="breadcrumb-item"><a href="/dashboard">Home</a>/<a href="/user">Tabel Daftar User</a>/Ubah</li>
              <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">


        <div class="container">
	@foreach($data_user as $data)
	<form class="form-horizontal" action="/user/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $data->id }}"> <br/>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ktm">KTM:</label>
                    <input class="col-sm-9" type="text" required="required" name="ktm" value="{{ $data->ktm }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Nama:</label>
                    <input class="col-sm-9" type="text" required="required" name="name" value="{{ $data->name }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="fakultas">Fakultas:</label>
                    <input class="col-sm-9" type="text" required="required" name="fakultas" value="{{ $data->fakultas }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="prodi">Prodi:</label>
                    <input class="col-sm-9" type="text" required="required" name="prodi" value="{{ $data->prodi }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="kode">Kode:</label>
                    <input class="col-sm-9" type="text" required="required" name="kode" value="{{ $data->kode }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="status">Status:</label>
                    <input class="col-sm-9" type="text" name="status" value="{{ $data->status }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="jabatan">Jabatan:</label>
                    <input class="col-sm-9" type="text" name="jabatan" value="{{ $data->jabatan }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                    <input class="col-sm-9" type="text" required="required" name="alamat" value="{{ $data->alamat }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="telepon">Telepon:</label>
                    <input class="col-sm-9" type="text" required="required" name="telepon" value="{{ $data->telepon }}">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <input class="col-sm-9" type="text" required="required" name="email" value="{{ $data->email }}">
                </div>
        
                <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Simpan Perubahan</button>
                </div>
                </div>
	</form>
    </div>
	@endforeach
    </div>
            <!-- /.card-body -->
          </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@stop