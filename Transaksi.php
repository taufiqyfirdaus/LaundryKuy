<html lang="eng">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LaundryKuy</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- menyisipkan bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src=""></script>
  </head>
  <body style="background-color: rgba(129, 129, 129, 0.2)">
    <nav class="navbar-expand-sm" style="height: 50px"></nav>
    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
      <a class="navbar-brand" href="home.html">
        <img
          src="img/logo2.png"
          class="rounded-circle"
          alt="Logo"
          style="width: 40px"
        />
      </a>
      <a href="home.html" class="navbar-brand">LaundryKuy</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto mr-5">
          <li class="nav-item">
            <a href="home.html" class="nav-link text-dark">Home</a>
          </li>
          <li class="nav-item">
            <a href="DaftarTransaksi.php" class="nav-link text-dark">Daftar Transaksi</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-dark"
              href="#"
              id="navbardrop"
              data-toggle="dropdown"
            >
              Layanan
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="LaundryKiloan.php">Laundry Kiloan</a>
                <a class="dropdown-item" href="LaundrySatuan.php">Laundry Satuan</a>
                <a class="dropdown-item" href="LaundrySepatu.php">Cuci Sepatu</a>
                <a class="dropdown-item" href="LaundryKarpet.php">Cuci Karpet</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="Outlet.php" class="nav-link text-dark">Outlet</a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link text-dark">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container pt-5 pb-5">
      <div class="text-center">
        <h2 class="mb-4"><b>Transaksi</b></h2>
        <p>
          Anda bisa melakukan pemesanan jasa disini.
        </p>
        <?php
        include 'koneksi.php';

        if(isset($_POST['simpan'])){
            $id_layanan = $_POST["id_layanan"];
            $nama_pemesan = $_POST["nama_pemesan"];
            $alamat_pemesan = $_POST["alamat_pemesan"];
            $no_telepon_pemesan = $_POST["no_telepon_pemesan"];
            $queryharga = "SELECT harga FROM layanan WHERE id = '$id_layanan'";
            $ttl_harga = mysqli_query($connect, $queryharga);
            
            $row = mysqli_fetch_assoc($ttl_harga);
                  
            $totalHarga = $row['harga'];
                
            $querytambah = mysqli_query($connect, "INSERT INTO transaksi VALUES('','$id_layanan' , '$nama_pemesan' , '$alamat_pemesan' , '$no_telepon_pemesan', '$totalHarga')");

            if ($querytambah) {
                # code redicet setelah insert ke home?>
                <div class="alert alert-success" style="width: 800px; margin-left: auto; margin-right: auto;" role="alert">
                  <b>Pemesanan berhasil!</b>
                </div>
                <meta http-equiv="refresh" content="2;url=Transaksi.php">
                <?php
            }
            else{
                echo "ERROR, tidak berhasil". mysqli_error($connect);
            }
        }
        ?>
        <form action="" method="post" role="form" style="width: 800px; margin-left: auto; margin-right: auto;">
          <h4 class="text-left mb-4"><b>Form Transaksi</b></h4>
          <div>
            <div class="form-group">
                <p class="text-left mb-1">Id Layanan</p>
                <input type="text" class="form-control" name="id_layanan" placeholder="Masukkan Id Layanan yang ingin dipesan" value="">
                <small id="idHelp" class="form-text text-muted text-left">Id dapat dilihat pada halaman layanan yang anda inginkan melalui navbar.</small>
            </div>
            <div class="form-group">
                <p class="text-left mb-1">Nama</p>
                <input type="text" class="form-control" name="nama_pemesan" placeholder="Masukkan nama anda" value="">
            </div>
            <div class="form-group">
                <p class="text-left mb-1">Alamat</p>
                <input type="text" class="form-control" name="alamat_pemesan" placeholder="Masukkan alamat anda" value="">
            </div>
            <div class="form-group">
                <p class="text-left mb-1">No. Telepon</p>
                <input type="text" class="form-control" name="no_telepon_pemesan" placeholder="Masukkan nomor telepon anda" value="">
            </div>
            <div class="text-right">
              <input type="submit" name="simpan" class="btn btn-primary mr-1" value="Simpan">
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
  <footer class="text-center text-lg-start mt-3" style="background-color: #023750;">
    <div class="text-light text-center p-3">© 2022 Copyright LaundryKuy</div>
  </footer>
</html>