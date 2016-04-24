<?php
ob_start();
include "../connect.php";

if (isset($_POST['request'])) 
{
$iduser=base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST['iduser'])))));
$tglreq=date('d-m-Y');
$time=date('h:i:s');
$location=$_POST['location'];
$tujuan=$_POST['tujuan'];
$state=$_POST['state'];
$city=$_POST['city'];
$keperluan=$_POST['keperluan'];
$jumlah=$_POST['jumlahP'];
$tglmulai=$_POST['date-start'];
$jammulai=$_POST['time-start'];
$tglselesai=$_POST['date-finish'];
$jamselesai=$_POST['time-finish'];
$kondisi=$_POST['kondisi'];
    

$query=mysql_query("INSERT INTO `request`( `iduser`, `tgl_request`, `waktu_request`, `tujuan`,`state`,`city`,`keperluan`, `location`, `jumlahP`, `tgl_start`, `jam_start`, `tgl_finish`, `jam_finish`, `kondisi`) VALUES ('$iduser','$tglreq','$time','$tujuan','$state','$city','$keperluan','$location','$jumlah','$tglmulai','$jammulai','$tglselesai','$jamselesai','$kondisi')");
    

if($query){
    
    header("location:../request-success");
}



}