<?php 

    require 'functions.php';

    $id = $_GET["id"];

    if (delete($id) > 0) {
            echo "<script> 
                    alert('Data Berhasil Dihapus!'); 
                    document.location.href = 'index.php';
                </script>";
    }else{
            echo "<script> 
                    alert('Data GAGAL Dihapus!'); 
                    document.location.href = 'index.php';
                </script>";
    }

    ?>