<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('warga.php');
        $warga1= new warga();
        $warga1->personawal();
        echo"<hr>";
        $warga1->setperson();
        $warga1->person();
        echo"<hr>";
        $warga1->person3("iqbal "," depok")


    ?>
</body>
</html>