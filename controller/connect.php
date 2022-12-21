<?php

    $connect = mysqli_connect("localhost", "root", "", "kkp");
    if (mysqli_connect_errno()) {
        echo "ora konek cuk".mysqli_connect_error();
    }

    // $koneksi = mysql_select_db("dbase_kkp");
    // if (!$koneksi){
    //     echo "DBase Error!";
    // }

?>