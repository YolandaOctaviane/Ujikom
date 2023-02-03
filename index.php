<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Uni Book Store</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="admin.php">Admin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pengadaan.php">Pengadaan</a>
    </li>
  </ul>
</nav>

<h1 align="center">Informasi Buku</h1>

<form action="index.php" method="post">
<table>
    <tr>
        <td><input class="ms-3 mt-3 form-control" type="text" name="cari" size="40" placeholder="Masukkan kata kunci nama buku..."></td>
        <td><button type="submit" class="mt-3 ms-4 btn btn-warning" >Cari Data</button></td>
    </tr>
</table>
</form>
<?php 
if(isset($_POST['cari'])){
	$cari = $_POST['cari'];
	echo '<br><b class="ms-3">Hasil pencarian : '.$cari.'</b><br>';
}
?>
<br>
    <table class="table table-striped table-hover">
    <thead>
    <tr>
        <td><b>ID Buku</b></td>
        <td><b>Kategori</b></td>
        <td><b>Nama Buku</b></td>
        <td><b>Harga</b></td>
        <td><b>Stok</b></td>
        <td><b>Penerbit</b></td>
    </tr>
    </thead>

    <?php 
    if(isset($_POST['cari'])){
		$cari = $_POST['cari'];
		$data = mysqli_query($config, "select * from buku where nama_buku like '%".$cari."%'");				
	}else{
		$data = mysqli_query($config, "SELECT * FROM buku");		
	}
    while($row = mysqli_fetch_assoc($data)):?>
    <tbody>
    <tr>
        <td><?php echo $row['id_buku'];?></td>
        <td><?php echo $row['kategori'];?></td>
        <td><?php echo $row['nama_buku'];?></td>
        <td><?php echo $row['harga'];?></td>
        <td><?php echo $row['stok'];?></td>
        <td><?php echo $row['penerbit'];?></td>
    </tr>
    </tbody>
    <?php endwhile;?>
    </table>

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>