<html lang="eng">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LaundryKuy</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- menyisipkan bootstrap  -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
    />
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
              <a class="dropdown-item" href="LaundrySatuan.php"
                >Laundry Satuan</a
              >
              <a class="dropdown-item" href="LaundrySepatu.php">Cuci Sepatu</a>
              <a class="dropdown-item" href="LaundryKarpet.php"
                >Cuci Karpet</a
              >
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
        <h2 class="mb-5"><b>Jasa Laundry Karpet</b></h2>

        <img class="text-center mb-4" src="img/karpetLayanan.jpg" width="900px" />

        <p style="font-size: 15px">
          Tanpa kita sadari karpet merupakan tempat sebagian besar tempat
          bersarangnya bakteri, jamur, debu-debu halus yang bisa mengganggu
          kesehatan kita` jika karpet tidak secara rutin dan dibersihkan dengan
          baik. Sangat penting membersihkan dan mencuci karpet secara berkala
          selain untuk menjaga kesehatan khususnya pernafasan, karpet yang
          bersih juga membuat suasana nyaman untuk area rumah, kantor, apalagi
          karpet masjid yang digunakan untuk beribadah setiap hari.
        </p>
        <h4 class="mb-4">Harga Layanan</h4>
        <table class="table table-bordered" style="background-color: white">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Id</th>
              <th>Layanan</th>
              <th>Harga</th>
            </tr>
          </thead>
          <tbody>
            <?php
                include "koneksi.php";
                $no = 1;
                $query = "SELECT * FROM layanan WHERE id LIKE 'KR%'";
                $result = mysqli_query($connect, $query);
  
                if(mysqli_num_rows($result) >
            0){ while($row = mysqli_fetch_array($result)){ ?>
            <tr>
              <td><?php echo $no++;?></td>
              <td><?php echo $row["id"] ?></td>
              <td><?php echo $row["nama_layanan"] ?></td>
              <td><?php echo $row["harga"] ?></td>
              <?php
                    }
                }else{
                    echo "0 result";
                  }
              ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
  <footer class="bg-dark text-center text-lg-start mt-3">
    <div class="text-light text-center p-3">© 2022 Copyright LaundryKuy</div>
  </footer>
</html>
