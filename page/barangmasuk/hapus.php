<?php

	$id = $_GET ['id'];
	$kode = $_GET ['kode'];
	$jumlah= $_GET ['jumlah'];
	$koneksi->query("update tb_barang set stok = stok - '$jumlah' where kode_barang='$kode'");
	$koneksi->query("delete from tb_barang_masuk where kode_barang_masuk='$id'");

?>

<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=barangmasuk";
	</script>