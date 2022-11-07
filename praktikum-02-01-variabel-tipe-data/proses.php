<?php
    if  ($nim = isset ($_POST["nim"]) ? $_POST["nim"] : ""
    AND $nama = isset ($_POST["nama"]) ? $_POST["nama"] : ""
    AND $txtstudi = isset ($_POST["studi"]) ? $_POST["studi"] : "") {

        echo "<p>hai, perkealkan nama saya adalah : ".$nama." dengan nim : ".$nim.",
        saya adalah mahasiswa dari program studi : ".$txtstudi;
    }  
    else
{
    echo("isi semua data, <a href=input.html>klik disini</a> untuk kembali");
}
?>