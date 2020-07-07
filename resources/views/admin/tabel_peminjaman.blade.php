@extends('admin.layout')
@section('title', 'Tabel Peminjaman')
@section('content')
  

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel daftar peminjaman ruangan dan barang KOPMA UGM</h3>
            </div>
            <!-- /.card-header -->
            <div style="Overflow:scroll" class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Acara</th>
                  <th>Ruang</th>
                  <th>Barang</th>
                  <th>Jumlah_pinjam</th>
                  <th>Tanggal</th>
                  <th>Waktu_mulai</th>
                  <th>Waktu_selesai</th>
                  <th>Ubah</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data_peminjaman as $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->acara}}</td>
                  <td>{{$data->ruang}}</td>
                  <td>{{$data->barang}}</td>
                  <td>{{$data->jumlah_pinjam}}</td>
                  <td>{{$data->tanggal}}</td>
                  <td>{{$data->waktu_mulai}}</td>
                  <td>{{$data->waktu_selesai}}</td>
                  <div class="row">
                  <td><button type="button" class="btn btn-primary" onClick="handleClickUbah()">Ubah</button></td>
                  <td><button type="button" class="btn btn-danger" onClick="handleClickHapus()">Hapus</button></td>
                  </div>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
            </section>
@stop
