<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<?php
    include('mydb.php');
    ?>

<body>
    <?php
    $db = new myDb();
    $data_warga = $db->show();
        if(isset($_POST['daftar'])){
            // echo "Sudah tersimpan belum";
            // print_r($_POST);
            $noktp=$_POST['no_ktp'];
            $nama=$_POST['nama_lengkap'];
            $alamat=$_POST['alamat_lengkap'];
            $nohp=$_POST['no_hp'];
            $querysimpan = $db->add_data($noktp,$nama,$alamat,$nohp);
            if($querysimpan==TRUE){
                $pesansimpan="Data Tersimpan Ke Database";
            }else{
                $pesansimpan="Data Gagal Tersimpan Ke Database";
            }
        } 
        if (isset($_GET['hapus'])) {
            // echo "Data Dengan ID : ".$_GET['hapus']." Akan Di Hapus";
            $idwarga=$_GET['hapus'];
            $queryhapus=$db->delete($idwarga);
            if($queryhapus==TRUE){
                $pesanhapus="Data Berhasil Terhapus";
            }else{
                $pesanhapus="Data Gagal Terhapus";
            }
        }
    ?>
    <div class="container">
        <div class="col-md-12">
            <div class="pt-2">
            <h2>Data Warga</h2>
            <a href="form_daftar.php" class="btn btn-success mb-3">[+] Tambah Data Warga</a>
            </div>
            
        </div>
    <?php
        $db = new mydb();
        $data_warga = $db->show();

    ?>
     <?php 
    if(isset($_POST['daftar'])){
       ?>
        <div class="alert alert-success"><?php echo $pesansimpan; ?></div>
        <?php 
    }

    ?>
    <?php 
    if(isset($_GET['hapus'])){
       ?>
        <div class="alert alert-danger"><?php echo $pesanhapus; ?></div>
        <?php 
    }
    
    ?>
    <table class="table  table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No KTP</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Alamat</th>
                <th scope="col">No HP</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i=0;
            foreach($data_warga as $data){ $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data['no_ktp']; ?></td>
            <td><?php echo $data['nama_lengkap']; ?></td>
            <td><?php echo $data['alamat_lengkap']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td><a class="btn btn-primary" href="detail.php?id=<?php echo $data['id']; ?>">Detail</a> 
            <a class="btn btn-danger" href="index.php?hapus=<?php echo $data['id']; ?>">Hapus</a>
            </td>
        </tr>

        <?php } ?>
        </tbody>
    </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>