@extends('admin.layout')
@section('title', 'Tabel Daftar Barang')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel daftar barang KOPMA UGM</h3>
            </div>
            <!-- /.card-header -->
            <div style="Overflow:scroll" class="card-body">
              <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama_barang</th>
                  <th>Jumlah_barang</th>
                  <th>Barang_tersedia</th>
                  <th>Jumlah_pinjam</th>
                  <th>Jumlah_request</th>
                  <th>Jenis</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach($data_barang as $data)
                <tr id="kolom-{{$data->id}}">
                  <td>{{$data->id}}</td>
                  <td>{{$data->nama_barang}}</td>
                  <td>{{$data->total_barang}}</td>
                  <td>{{$data->barang_tersedia}}</td>
                  <td>{{$data->jumlah_pinjam}}</td>
                  <td>{{$data->jumlah_request}}</td>
                  <td>N{{$data->jenis}}</td>
                  <td class="row">
                    <button type="button" class="btn btn-primary" onClick="handleClickUbah({{$data->id}})">Ubah</button>
                    <button type="button" class="btn btn-danger" onClick="handleClickHapus({{$data->id}})">Hapus</button>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
         
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <script>
function handleClickUbah(id) {
console.log(id);
document.getElementById("kolom-"+id).innerHTML=
          '<td> <?php echo $data_barang[0]->id ?> </td>'+
          '<td><input type="text" value="{{$data_barang[0]->nama_barang}}"/></td>'+
          '<td><input type="text" value="{{$data_barang[0]->total_barang}}"/></td>'+
          '<td><input type="text" value="{{$data_barang[0]->barang_tersedia}}"/></td>'+
          '<td><input type="text" value="{{$data_barang[0]->jumlah_pinjam}}"/></td>'+
          '<td><input type="text" value="{{$data_barang[0]->jumlah_request}}"/></td>'+
          '<td><input type="text" value="{{$data_barang[0]->jenis}}"/></td>'+
          '<td class="row">'+
          '<button type="button" class="btn btn-success" onClick="handleClickSimpan({{$data->id}})">Simpan</button>'+
          '</td>';
}
</script>
@stop
