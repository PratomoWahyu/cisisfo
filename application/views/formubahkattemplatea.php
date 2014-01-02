
<div class="container">
<div class="row">
<h3>Tambah Kategori Template</h3>
<div class="col-md-6">
<form action="<?php echo base_url(); ?>index.php/kategori/seteditkattemplate/<?php echo $datan->idKatTemplate; ?>" method="POST" role="form">

<?php if (isset($hasiln)) {
	foreach ($hasiln as $datan) {
		?>
		<div class="form-group">
		<label for="">Kategori Template</label>
		<input type="text" class="form-control" id="nmkattemplateu" name="nmkattemplateu" value="<?php echo $datan->katTemplate; ?>">
	</div>
	<?php
	}
} ?>


	<input name="submit" id="submit" type="submit" value="Tambah" class="btn btn-primary">
</form>
</div>
