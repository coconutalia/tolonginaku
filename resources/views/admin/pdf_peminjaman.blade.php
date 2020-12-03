<style>
  table,th,td {
    border:1px solid black;
    border-collapse:collapse;
    padding:10px;
  }
</style>
<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th colspan="9">Laporan Peminjaman KOPMA</th>
                </tr>
                <tr>
                  <th>ID</th>
                  <th>Acara</th>
                  <th>Ruang</th>
                  <th>Barang</th>
                  <th>Jumlah Pinjam</th>
                  <th>Tanggal</th>
                  <th>Waktu Mulai</th>
                  <th>Waktu Selesai</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($peminjaman as $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->acara}}</td>
                  <td>{{$data->ruang}}</td>
                  <td>{{$data->barang}}</td>
                  <td>{{$data->jumlah_pinjam}}</td>
                  <td>{{$data->tanggal}}</td>
                  <td>{{$data->Waktu_mulai}}</td>
                  <td>{{$data->Waktu_selesai}}</td>
                  @if($data->aksi=="Terima")
                  <td>{{$data->aksi}}</td>
                  @elseif($data->aksi=="Tolak")
                  <td>{{$data->aksi}}</td>
                  @elseif($data->aksi=="Kembali")
                  <td>{{$data->aksi}}</a></td>
                  @endif
                </tr>
                @endforeach
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                </tfoot>
              </table>