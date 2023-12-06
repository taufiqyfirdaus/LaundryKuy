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
        <h2 class="mb-5"><b>Outlet</b></h2>

        <img class="text-center mb-4" src="img/outlet.jpg" width="900px" height="350px" />

        <p style="font-size: 15px">
          LaundryKuy memiliki beberapa Outlet yang telah tersebar di malang dan sekitarnya.
        </p>
        <h4 class="mb-4">Daftar Outlet</h4>
        <div class="box-tools float-right">
            <a href="#" class="btn btn-success mb-1" data-toggle="modal" data-target="#tambahoutlet"><i class="fa fa-male"></i> Tambah Outlet</a>
        </div>
        <table class="table table-bordered" style="background-color: white">
            <thead>
              <tr>
                  <th>No</th>
                  <th>Id</th>
                  <th>Nama Outlet</th>
                  <th>Alamat</th>
                  <th>No. Telepon</th>
                  <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
                include "koneksi.php";
                $no = 1;
                $queryview = mysqli_query($connect, "SELECT * FROM outlet ORDER BY id");
                    if(mysqli_num_rows($queryview) > 0){
                        while ($row = mysqli_fetch_assoc($queryview)) {
              ?>
              <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $row["id"] ?></td>
                  <td><?php echo $row["nama_outlet"] ?></td>
                  <td><?php echo $row["alamat"] ?></td>
                  <td><?php echo $row["no_telepon"] ?></td>
                  <td>
                      <a href="#" class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#updateoutlet<?php echo $no; ?>"><i class="fa fa-pencil"></i> Edit</a>
                      <a href="#" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#deleteoutlet<?php echo $no; ?>"><i class="fa fa-trash"></i> Delete</a>                      
                      
                      <!-- modal delete -->
                      <div class="example-modal">
                        <div id="deleteoutlet<?php echo $no; ?>" class="modal fade" role="dialog" style="display:none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title">Konfirmasi Delete Data</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                <h4 align="center" >Apakah anda yakin ingin menghapus outlet id <?php echo $row['id'];?><strong><span class="grt"></span></strong> ?</h4>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                                <a href="function_Outlet.php?act=deleteoutlet&id=<?php echo $row['id']; ?>" class="btn btn-primary">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- modal delete -->

                      <!-- modal update outlet -->
                      <div class="example-modal">
                        <div id="updateoutlet<?php echo $no; ?>" class="modal fade" role="dialog" style="display:none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title">Edit Data Outlet</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                <form action="function_Outlet.php?act=updateoutlet" method="post" role="form">
                                  <?php
                                  $id = $row['id'];
                                  $query = "SELECT * FROM outlet WHERE id='$id'";
                                  $result = mysqli_query($connect, $query);
                                  while ($row = mysqli_fetch_assoc($result)) {
                                  ?>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Id <span class="text-red">*</span></label>         
                                      <div class="col-sm-8"><input type="text" class="form-control" name="id" placeholder="Id" value="<?php echo $row['id']; ?>"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Nama Outlet <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="nama_outlet" placeholder="Nama Outlet" value="<?php echo $row['nama_outlet']; ?>"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">Alamat <span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $row['alamat']; ?>"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-right">No. Telepon<span class="text-red">*</span></label>
                                      <div class="col-sm-8"><input type="text" class="form-control" name="no_telepon" placeholder="No. Telepon" value="<?php echo $row['no_telepon']; ?>"></div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button id="noedit" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                  </div>
                                  <?php
                                  }
                                  ?>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- modal update outlet -->
                    </td>
                  </tr>
                <?php
                  }
                }else{
                  echo "0 result";
                }
                ?>
              </tbody>
          </table>
      </div>
    </div>
    <!-- modal insert -->
    <div class="example-modal">
          <div id="tambahoutlet" class="modal fade" role="dialog" style="display:none;">
            <div class="modal-dialog"> 
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">Tambah Outlet Baru</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="function_Outlet.php?act=tambahoutlet" method="post" role="form">
                    <div class="form-group">
                      <div class="row">
                      <label class="col-sm-3 control-label text-right">Id Outlet <span class="text-red">*</span></label>         
                      <div class="col-sm-8"><input type="text" class="form-control" name="id" placeholder="Id Outlet" value=""></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                      <label class="col-sm-3 control-label text-right">Nama Outlet <span class="text-red">*</span></label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="nama_outlet" placeholder="Nama Outlet" value=""></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                      <label class="col-sm-3 control-label text-right">Alamat <span class="text-red">*</span></label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="alamat" placeholder="Alamat" value=""></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                      <label class="col-sm-3 control-label text-right">No. Telepon <span class="text-red">*</span></label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="no_telepon" placeholder="No. Telepon" value=""></div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                      <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div><!-- modal insert close -->
  </body>
  <footer class="text-center text-lg-start mt-3" style="background-color: #023750;">
    <div class="text-light text-center p-3">© 2022 Copyright LaundryKuy</div>
  </footer>
</html>