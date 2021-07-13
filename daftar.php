<?php 
require 'functions.php';

if( isset($_POST["submit"]) ){


  
  //cek apakah berhasil daftar
  if ( daftar($_POST) > 0) {
    echo "
          <script>
          alert('pendaftaran berhasil, silahkan login');
          document.location.href = './nasabah-dashboard/login.php';
          </script>
          ";
  }else {
    echo "
          <script>
          alert('pendaftaran gagal, silahkan cek data kembali');
          document.location.href = 'daftar.php';
          </script>
          ";
  }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Formulir Pendaftaran Anggota | BMT Amanah Syariah</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/style-daftar.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
<div class="signupform">
<h1>Formulir Pendaftaran Anggota</h1>
  <div class="container">
    
    <div class="agile_info">
      <div class="w3_info">
        <h2>Formulir Pendaftaran </h2>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="left margin">
              <label>Username</label>
              <div class="input-group">
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" name="username" id="username" placeholder="Username" required>
              </div>
            </div>
            <div class="left">
              <label>Password</label>
              <div class="input-group">
                <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="Password" name="password" id="password" placeholder="Password" required>
              </div>
            </div>
            <div class="left margin">
              <label>Nama Lengkap</label>
              <div class="input-group">
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required> 
              </div>
            </div>
            <div class="left">
              <label>Nama Ibu Kandung</label>
              <div class="input-group">
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" name="nama_ibu" id="nama_ibu" placeholder="Ibu Kandung" required> 
              </div>
            </div>
            <div class="left margin">
              <label>Jenis Kelamin</label>
              <div class="input-group">
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" name="jk" id="jk" placeholder="Laki-Laki / Perempuan" required> 
              </div>
            </div>
            <div class="left">
              <label>Alamat Domisili</label>
              <div class="input-group">
                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                <input type="text" name="alamat" id="alamat" placeholder="Alamat" required> 
              </div>
            </div>
            <div class="left margin">
              <label>Email</label>
              <div class="input-group">
                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="left">
              <label>Nomor Hp</label>
              <div class="input-group">
                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                <input type="text" name="no_hp" id="no_hp" placeholder="Nomor Hp" required> 
              </div>
            </div>
            <div class="left margin">
              <label>No KTP</label>
              <div class="input-group">
                <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                <input type="text" name="no_ktp" id="no_ktp" placeholder="Nomor KTP" required>
              </div>
            </div>
            <div class="left">
              <label>Upload KTP</label>
              <div class="input-group">
                <span><i class="fa fa-" aria-hidden="true"></i></span>
                  <div class="form-group">
                    <input type="file" name="foto_ktp" id="foto_ktp" required class="form-control-file">
                  </div>                
              </div>
            </div>
            <div class="left margin">
              <label>Upload Bukti Transfer</label>
              <div class="input-group">
                <span><i class="fa fa-" aria-hidden="true"></i></span>
                  <div class="form-group">
                    <input type="file" name="foto_transfer" id="foto_transfer" required class="form-control-file">
                  </div>
              </div>
            </div>
            <div class="left">
            <label>Upload Foto Profil</label>
              <div class="input-group">
                <span><i class="fa fa-" aria-hidden="true"></i></span>
                  <div class="form-group">
                    <input type="file" name="foto_profil" id="foto_profil" required class="form-control-file">
                  </div>                
              </div>
            </div>
            <div class="clear"></div>
              <input type="checkbox" value="remember-me" required/>
              <h4> Saya setuju dengan <a href="">Syarat dan Ketentuan</a> </h4>        
              <button class="btn btn-danger btn-block" type="submit" name="submit">Daftar</button>
          </form>
      </div>
      <div class="w3l_form">
        <div class="left_grid_info">
          <h3>Sudah Mendaftar?</h3>
          <p> Nam eleifend velit eget dolor vestibulum ornare. Vestibulum est nulla, fermentum eget euismod et, tincidunt at dui. Nulla tellus nisl, semper id justo vel, rutrum finibus risus. Cras vel auctor odio.</p>
          <a href="#" class="btn">Login <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
      </div>
      
    </div>
    <div class="footer">
     <p>&copy;</p>
   </div>

  </div>
  </body>
</html>