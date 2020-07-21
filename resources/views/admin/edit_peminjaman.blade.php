@extends('admin.layout')
@section('title', 'Ubah Peminjaman')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah Peminjaman</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <<li class="breadcrumb-item"><a href="/dashboard">Home</a>/<a href="/peminjaman">Tabel Peminjaman</a>/Ubah</li>
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
	@foreach($data_peminjaman as $data)
	<form action="/p/update" method="post">
		{{ csrf_field() }}
		<input class="form-horizontal" type="hidden" name="id" value="{{ $data->id }}"> <br/>

        <div class="form-group">
            <label class="control-label col-sm-2" for="aksi">Aksi:</label>
            <input class="col-sm-9" type="text" required="required" name="aksi" value="{{ $data->aksi }}">
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