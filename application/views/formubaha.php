
<div class="container">
<div class="row">
<h3>Tambah Kategori</h3>
<div class="col-md-6">

<?php if (isset($hasiln)) {
	foreach ($hasiln as $datan) {
		?>
<form action="<?php echo base_url(); ?>index.php/kategori/seteditkategori/<?php echo $datan->idKategori; ?>" method="POST" role="form">

		<div class="form-group">
		<label for="">Kategori</label>
		<input type="text" class="form-control" id="nmkategoriu" name="nmkategoriu" value="<?php echo $datan->namaKategori; ?>">
	</div>
	<?php
	}
} ?>


	<input name="submit" id="submit" type="submit" value="Ubah" class="btn btn-primary">
</form>
</div>
