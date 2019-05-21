<?php
$tanggal_pinjam_buku       = new DateTime("2017-10-06");
$tanggal_buku_dikembalikan = new DateTime(); // tanggal sekarang berdasarkan tanggal di komputer
$lama_buku_dipinjam        = $tanggal_buku_dikembalikan->diff($tanggal_pinjam_buku)->format("%a");

echo "Buku sudah dipinjam selama : " .$lama_buku_dipinjam ." Hari";
?>
