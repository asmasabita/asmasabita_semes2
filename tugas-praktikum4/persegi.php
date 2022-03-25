<?php 
class PERSEGIPANJANG {
    private $panjang; 
    const Lebar = 8;
    function __construct($pp)
    {
        $this->panjang = $pp;
    }
    function getLuas()
    {
        return self::Lebar * $this->panjang;
    }
    function getKeliling()
    {
        return 4 * self::Lebar + 4* $this->panjang;
    }
}

echo " Lebar Pada Persegi Panjang adalah :" .PERSEGIPANJANG::Lebar;
$persegi1 = new PERSEGIPANJANG(15);
$persegi2 = new PERSEGIPANJANG(10);

echo "</br> Luas pada Persegi Panjang 1 :" .$persegi1->getLuas();
echo "</br> Keliling pada Persegi Panjang 1 :" .$persegi2->getKeliling();

echo "</br> Luas pada Persegi Panjang 2 :" .$persegi1->getLuas();
echo "</br> Keliling pada Persegi Panjang 2 :" .$persegi2->getKeliling();
?>