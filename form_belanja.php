<?php 
$proses = $_POST['proses'];
$nama_custumer = $_POST['custumer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah_beli'];

if ($produk == "TV") {
    $harga = 4200000;
}elseif ($produk == "KULKAS") {
    $harga = 3100000;
}elseif ($produk == "MESIN CUCI") {
    $harga = 3800000;
}else {
    $harga = "tidak memiliki nilai";
};
$total = $harga * $jumlah;

echo "Nama Customer : ".$nama_custumer;
echo "<br/>Produk Pilihan : ".$produk;
echo "<br/>Jumlah Beli : ".$jumlah;
echo "<br> Total Belanja : Rp. " .number_format($total,0,',','.') . ",-";
?>