<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pinjam Ruang Kopma</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets_user/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets_user/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets_user/lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets_user/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>


<body>
  <div id="preloader"></div>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <a href="{{Route('home')}}"><img src="assets_user/img/kopma-logo.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
      <ul class="nav-menu">
          <li><a href="{{Route('home')}}">Home</a></li>
          <li><a href="{{Route('profil')}}">Profil</a></li>
          <li><a href="{{Route('fasilitas')}}">Fasilitas</a></li>
          <li class="menu-active"><a href="{{Route('peminjaman')}}">Peminjaman</a></li>
          <li><a href="{{Route('agenda')}}">Agenda</a></li>
          <li><a href="{{Route('signin')}}"><img src="assets_user/img/logout.png"></img></a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  Form Peminjaman
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Form Peminjaman</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Lengkapi form dengan benar dan lakukan peminjaman</p>
        </div>
      </div>

        <div class="col-md-6 col-md-push-3">
          <div class="form">
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">

              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Masukkan Nama Lengkap" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <select class="form-control" id="status">
                  <option>Fakultas</option>
                  <option>BIOLOGI</option>
                  <option>EKONOMIKA DAN BISNIS</option>
                  <option>FARMASI</option>
                  <option>FILSAFAT</option>
                  <option>GEOGRAFI</option>
                  <option>HUKUM</option>
                  <option>ILMU BUDAYA</option>
                  <option>ISIPOL</option>
                  <option>KEDOKTERAN GIGI</option>
                  <option>KEDOKTERAN HEWAN</option>
                  <option>KEDOKTERAN, KESEHATAN MASYARAKAT DAN KEPERAWATAN</option>
                  <option>KEHUTANAN</option>
                  <option>MIPA</option>
                  <option>PERTANIAN</option>
                  <option>PETERNAKAN</option>
                  <option>PSIKOLOGI</option>
                  <option>TEKNIK</option>
                  <option>TEKNOLOGI</option>
                  <option>SEKOLAH VOKASI</option>
                </select>
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <select class="form-control" id="status" name="prodi" placeholder="Program Studi">
                  <option>Program Studi</option>
                  <option>D3 KOMPUTER DAN SISTEM INFORMASI</option>
                  <option>D4 REKAYASA PERANGKAT LUNAK</option>
                </select>
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="password_user" id="name" placeholder="NIM" data-rule="email" data-msg="Masukkan NIM" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
              <form action="proses.php" method="post" enctype="multipart/form-data">
                <p>Upload Scan KTM<input type='file' name='foto' /></p>
              </form>
              </div>

              <div class="form-group">
                <!-- <label for="sel1">Pilih Jurusan:</label> -->
                <select class="form-control" id="status">
                  <option>Status</option>
                  <option>Anggota KOPMA UGM</option>
                  <option>Non Anggota</option>
                </select>
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="password_user" id="name" placeholder="Jabatan" data-rule="email" data-msg="Masukkan Jabatan Anggota Kopma UGM" />
                <!-- <div class="validation"></div> -->
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="password_user" id="name" placeholder="NAK" data-rule="email" data-msg="Masukkan NAK" />
                <!-- <div class="validation"></div> -->
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="password_user" id="name" placeholder="Alamat" data-rule="email" data-msg="Masukkan Alamat Lengkap" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="password_user" id="name" placeholder="No. Telp" data-rule="email" data-msg="Masukkan Nomor Telepon" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <select class="form-control" id="status">
                  <option>Ruang</option>
                  <option>Ruang Sidang</option>
                  <option>Ruang Perpustakaan</option>
                  <option>Ruang Anggota</option>
                </select>
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <h4>Barang</h4>
                <table>
                  <tr>
                    <td><input type='checkbox' name='bahasa2' value='asp' />Meja Ruang Perpustakaan</td>
                    <td><input type='checkbox' name='bahasa2' value='asp' />Layar Proyektor Ruang Sidang</td>
                    <td><input type='checkbox' name='bahasa2' value='asp' />Sound System Ruang Sidang</td>
                    <td><input type='checkbox' name='bahasa2' value='asp' />Meja Tinggi Ruang Anggota</td>
                  </tr>
                  <tr>
                    <td><input type='checkbox' name='bahasa2' value='asp' />Meja Pendek Ruang Anggota</td>
                    <td><input type='checkbox' name='bahasa2' value='asp' />Kursi Ruang Anggota</td>
                    <td><input type='checkbox' name='bahasa2' value='asp' />Karpet</td>
                    <td><input type='checkbox' name='bahasa2' value='asp' />Proyektor</td>
                  </tr>
                </table>
              <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="password_user" id="name" placeholder="Acara" data-rule="email" data-msg="Acara yang akan diselenggarakan" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="password_user" id="name" placeholder="Deskripsi" data-rule="email" data-msg="Deskripsi Acara" />
                <div class="validation"></div>
              </div>
              
              <div class="form-group">
                <input type="date" class="form-control" name="password_user" id="name" placeholder="Tanggal Pinjam" data-rule="email" data-msg="Pilih tanggal peminjaman" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <div class="col-xs-5">
                  <label for="ex1">Waktu mulai<input type="time" class="form-control" id="jam" name="jam"></label>
                </div>
                <div class="col-xs-5">
                  <label for="ex2">Waktu selesai<input type="time" class="form-control" id="jam" name="jam"></label>
                </div>
                <div class="validation"></div>
              </div>

</div>
</div> </div>

              <div class="text-center">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                  Submit
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Data berhasil disimpan!</h4>
                    </div>
                    <div class="modal-body">
                      <p>Admin akan mengonfirmasi data peminjaman Anda melalui email.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  

  <!--==========================
  Footer
============================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
        <div class="copyright">

          <a href="http://kopma.ugm.ac.id">
            <img src="assets_user/img/footer-kopma.png" alt="Universitas Gadjah Mada"></a>
    
            <p>Bulaksumur H-7&amp;H-8, Yogyakarta, 55281<br>
            <i class="fa fa-phone"></i> (0274) 565774, 519943<br>
            <i class="fa fa-fax"></i> (0274) 566171<br>
            <i class="fa fa-envelope"></i> info@kopma-ugm.net, brand@kopma-ugm.net</p>

          &copy; <strong>UNIVERSITAS GADJAH MADA</strong>
        </div>
        <div class="credits">

        </div>
      </div>
    </div>
  </div>
</footer>
<!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="assets_user/lib/jquery/jquery.min.js"></script>
  <script src="assets_user/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets_user/lib/superfish/hoverIntent.js"></script>
  <script src="assets_user/lib/superfish/superfish.min.js"></script>
  <script src="assets_user/lib/morphext/morphext.min.js"></script>
  <script src="assets_user/lib/wow/wow.min.js"></script>
  <script src="assets_user/lib/stickyjs/sticky.js"></script>
  <script src="assets_user/lib/easing/easing.js"></script>

  <script src="assets_user/js/custom.js"></script>

  <script src="assets_user/contactform/contactform.js"></script>

  <script>
    $('#jam').datetimepicker({
        format: 'hh:ii',
            language:  'en',
            weekStart: 1,
            todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
        });
    </script>


</body>

</html>
