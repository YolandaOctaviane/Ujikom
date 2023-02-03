<?php

include "config.php";
 
$id = $_GET['id_buku'];
mysqli_query($config, "DELETE FROM buku WHERE id_buku = '$id'");

 if(mysqli_affected_rows($config) > 0) {
	echo "<script>alert('Data berhasil dihapus');
	document.location.href = 'index.php';</script>";
} else{
	echo "<script>alert('Data gagal di hapus')</script>";
}
?>
 