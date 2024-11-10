<?php
//Date
//Untuk menampilkan tanggal dgn format tertentu
    echo date("l , d-M-Y <br>");

//Time
//UNIX TimeStamp / Epoch Time
//detik yang sudah berlalu sejak 1 januari 1970
    echo time();

    echo date("l",time()+60*60*24*100);
?>