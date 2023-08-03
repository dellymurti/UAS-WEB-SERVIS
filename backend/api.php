<?php
 include require __DIR__."/config.php";

////////////
// untuk insert data ke table_posting
$payload = file_get_contents("php//input");







$data = json_decode($payload);

if(data->aksi =="tambah"){
    $tabel = "table_".$data->tabel;
}

?>


