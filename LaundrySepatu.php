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
        <h2 class="mb-5"><b>Jasa Cuci Sepatu</b></h2>

        <img class="text-center mb-4" src="img/sepatuLayanan.jpg" width="900px" height="350px" />

        <p style="font-size: 15px">
          Tahukah anda kesalahan kabanyakan orang saat mencuci sepatu? Kesalahan
          atau pemahaman yang keliru yang sering dilakukan adalah mencuci sepatu
          direndam, dicuci basah dengan deterjen pakaian. Cara seperti itu akan
          mempersingkat keawetan dari sepatu karena penggunaan chemical yang
          tidak tepat pada bahan sepatu dapat mengakibatkan pudarnya warna atau
          kerusakan pada bahan sepetu tersebut, dengan pemakaian air yang
          berlebihan juga kan mengakibatkan sol pada sepatu mudah terbuka.
          Sepatu sebagai alas kaki yang berguna untuk melindungi mata tapi
          banyak sepatu-sepatu yang menjadi pelengkap style agar penampilan
          lebih menarik. Jenis-jenis sepatu pun pasti beragam, perawatannya pun
          atau cara mencuci sepatu tentu akan disesuaikan dengan bahan sepatu
          tersebut. Bahan sepatu suede (bahan sepatu yang berasal dari kulit
          hewan) akan beda cara membersihkannya dengan jenis sepatu sneaker yang
          gampang kotor.
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
                $query = "SELECT * FROM layanan WHERE id LIKE 'SP%'";
                $result = mysqli_query($connect, $query);
  
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
              ?>
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
  <footer class="text-center text-lg-start mt-3" style="background-color: #023750;">
    <div class="text-light text-center p-3">© 2022 Copyright LaundryKuy</div>
  </footer>
</html>