<?php 

include "config.php";

$id = $_GET['id_buku'];

if( isset($_POST["submit"])){
    $id_buku = $_POST["id_buku"];
    $kategori = $_POST["kategori"];
    $nama_buku = $_POST["nama_buku"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $penerbit = $_POST["penerbit"];

    mysqli_query($config, "update buku set id_buku='$id_buku', kategori='$kategori', nama_buku='$nama_buku', harga='$harga', harga='$harga', penerbit='$penerbit'  where id_buku='$id'");

    if( mysqli_affected_rows($config) > 0){
        echo "<script>alert('Data berhasil di UPDATE');
        document.location.href = 'index.php';</script>";
    } else{
        echo "<script>alert('Data gagal di UPDATE')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update Data Buku</title>
</head>
<body>
    <h1 align="center">Update Data Buku</h1>
<form action="" method="post">
    <table align="center">
    <?php 
    $id = $_GET['id_buku'];
    $result = mysqli_query($config, "select * from buku where id_buku='$id'");
    while($row = mysqli_fetch_assoc($result)):?>
    <tr>
         <td><label for="id_buku" class="form-label mt-4">ID Buku</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="id_buku" name="id_buku" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="kategori" class="form-label mt-4">Kategori</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="kategori" name="kategori" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="nama_buku" class="form-label mt-4">Nama Buku</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="nama_buku" name="nama_buku" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="harga" class="form-label mt-4">Harga</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="harga" name="harga" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="stok" class="form-label mt-4">Stok</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="stok" name="stok" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="penerbit" class="form-label mt-4">Penerbit</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="penerbit" name="penerbit" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><button type="submit" class="btn btn-warning mt-3 pr-3 pl-3" style="margin-left: 15rem;" name="submit">Simpan</button></td>
    </tr>
</table>
<?php endwhile; ?>
</form>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>