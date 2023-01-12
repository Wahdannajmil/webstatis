<?php
    $nama=$_REQUEST['nama'];
    $alamat=$_REQUEST['alamat'];
    $tanggal_lahir=$_REQUEST['tanggal_lahir'];
    $kesan_pesan=$_REQUEST['kesan_pesan'];
    $tmp=$_FILES['photo']['tmp_name'];
    $photo=$_FILES['photo']['name'];
    move_uploaded_file($tmp,$photo);
    echo "Nama : $nama <br>";
    echo "Alamat : $alamat <br>";
    echo "Tanggal lahir : $tanggal_lahir <br>";
    echo "Kesan pesan : $kesan_pesan ";
    echo "<img src='$photo' width='115px'>";

?>