<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Detail</title>
</head>
<body>
    <?php
        include('mydb.php');
        $db=new mydb();
        $idwarga=$_GET['id'];
        $data=$db->get_by_id($idwarga);
        // print_r($data);
    ?>
    <div class="container">
        <div class="col-mb-12">
            <div class="pt-5 text-center">
                <h2>Form Detail</h2>

            </div>
        </div>
        <div class="row">
            <table class="table  table-striped table-hover table-bordered">
                <tr>
                    <td>No ID</td>
                    <td><?php echo $data['id']; ?></td>
                </tr>
                <tr>
                    <td>No KTP</td>
                    <td><?php echo $data['no_ktp']; ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php echo $data['alamat_lengkap']; ?></td>
                </tr>
                <tr>
                    <td>No Handphone</td>
                    <td><?php echo $data['no_hp']; ?></td>
                </tr>
                <tr>
                    <td><a class="btn btn-primary" href="index.php">Kembali</a></td>
                </tr>
            </table>
        </div>
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