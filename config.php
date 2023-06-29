<?php
require_once('ripcord/ripcord.php');

$url = <insert server URL>;
$db = <insert database name>;
$username = "admin";
$password = <insert password for your admin user (default: admin)>;

// Membuat koneksi Ripcord
$common = ripcord::client("$url/xmlrpc/2/common");
$uid = $common->authenticate($db, $username, $password, []);
$models = ripcord::client("$url/xmlrpc/2/object");

// Memeriksa keberhasilan autentikasi
if (empty($uid)) {
    die('Gagal mengautentikasi ke Odoo.');
}else{
    echo "Koneksi ke odoo berhasil ";
}
