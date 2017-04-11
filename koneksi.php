<?php
ob_start();
$serverName = "Nama_server_SQLserver";
$conn = array( "Database"=>"nama_database", "UID"=>"username_anda", "PWD"=>"password_anda");
$koneksi = sqlsrv_connect( $serverName, $conn);
if (!$koneksi) {
        echo "Koneksi ke database gagal";
};
?>
