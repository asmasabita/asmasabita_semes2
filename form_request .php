<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="row" style="padding:20px">
        <div class="col-6">
            <h3>Belanja Online</h3><hr>
            <form method="POST" action="form_belanja.php">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                        <input id="custumer" name="custumer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input  name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                            <label for="produk_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                        <input id="jumlah" name="jumlah beli" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" value="proses" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-3" >
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Daftar Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" >TV : 4.200.000</th>
                    </tr>
                    <tr>
                        <th scope="row" >KULKAS : 3.100.000</th>
                    </tr>
                    <tr>
                        <th scope="row" >MESIN CUCI 3.800.000</th>
                    </tr>
                    <tr class="thead-light">
                        <th scope="row">Harga Dapat Berubah Setiap Saat</th>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        <hr>
    </div>

<?php 
$proses = $_POST['proses'];
$nama_custumer = $_POST['custumer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah_beli'];

echo "Nama Customer : ".$nama_custumer;
echo "<br/>Produk Pilihan : ".$produk;
echo "<br/>Jumlah Beli : ".$jumlah;
?>
</body>
</html>