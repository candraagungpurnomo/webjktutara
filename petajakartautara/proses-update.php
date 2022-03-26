<?php

include "koneksi.php";

if(isset($_POST['simpan'])){
    
    $jml = $_POST['jml'];
    $provinsi = $_POST['provinsii'];
    


    $sql = "UPDATE kepadatan SET provinsi='$provinsi' WHERE jml='$jml'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: tampildata.php');
    } else {
        die ("GAGAL menyimpan Data");
    }



} else {
    die ("proses Ditolak");
}

?>