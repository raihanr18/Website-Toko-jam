<?php

class Produk {

    private $id_produk;
    private $nama_produk;
    private $harga_produk;

    public function getId()
    {
        return $this->id_produk;
    }

    public function getNama()
    {
        return $this->nama_produk;
    }

    public function getHarga()
    {
        return $this->harga_produk;
    }

    public function setId($id_produk)
    {
        $this->id_produk = $id_produk;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

}

$xiaomi = new Produk();
$xiaomi->setId(1001);
$xiaomi->setNama('Xiaomi Redmi Note 8');
$xiaomi->setHarga(100000000);

print_r($xiaomi);