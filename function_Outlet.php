<?php
include 'koneksi.php';

if($_GET['act']== 'tambahoutlet'){
    $id = $_POST['id'];
    $nama_outlet = $_POST['nama_outlet'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];

    //query
    $querytambah =  mysqli_query($connect, "INSERT INTO outlet VALUES('$id' , '$nama_outlet' , '$alamat' , '$no_telepon')");

    if ($querytambah) {
        # code redicet setelah insert ke home
        header("location:Outlet.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($connect);
    }
}
elseif($_GET['act']=='updateoutlet'){
    $id = $_POST['id'];
    $nama_outlet = $_POST['nama_outlet'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];

    //query update
    $queryupdate = mysqli_query($connect, "UPDATE outlet SET nama_outlet='$nama_outlet' , alamat='$alamat' , no_telepon='$no_telepon' WHERE id='$id' ");

    if ($queryupdate) {
        # credirect ke page home
        header("location:Outlet.php");    
    }
    else{
        echo "ERROR, data gagal diupdate". mysqli_error($connect);
    }
}
elseif ($_GET['act'] == 'deleteoutlet'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($connect, "DELETE FROM outlet WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke home.php
        header("location:Outlet.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($connect);
    }

    mysqli_close($connect);
}
?>