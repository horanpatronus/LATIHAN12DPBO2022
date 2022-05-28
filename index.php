<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include("model/Template.class.php");
include("model/DB.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");
// include("conf.php");

$tp = new TampilPasien();
$data = $tp->tampil();

if(isset($_GET['id_delete'])){
    $id = $_GET['id_delete'];
    $tp->hapus($id);
}

if(isset($_GET['id_update'])){
    $id = $_GET['id_update'];
    $tp->update($id);
}