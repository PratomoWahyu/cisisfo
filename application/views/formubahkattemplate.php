<div class="container">
<div class="row">
<h3>Tambah Kategori Template</h3>
<div class="col-md-6">
<form action="<?php echo base_url(); ?>index.php/kattemplate/setkattemplate" method="POST" role="form">

<?php if (isset($hasiln)) {
	foreach ($hasiln as $datan) {
		?>
		<div class="form-group">
		<label for="">Kategori Template</label>
		<input type="text" class="form-control" id="nmkattemplate" name="nmkattemplate" value="<?php echo $datan->katTemplate; ?>">
	</div>
	<?php
	}
} ?>


	<input name="submit" id="submit" type="submit" value="Tambah" class="btn btn-primary">
</form>
</div>
<div class="col-md-6">
	<table class="table table-hover tabel">
		<thead>
			<tr>
				<th>ID KatTemplate</th>
				<th>Kategori Template</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (isset($hasil)) {
				
			 foreach ($hasil as $data) { ?>
			<tr>
				<td><?php echo $data->idKatTemplate; ?></td>
				<td><?php echo $data->katTemplate; ?></td>
				<td>Ubah | <a href="<?php echo base_url(); ?>index.php/kattemplate/delkattemplate/<?php echo $data->idKatTemplate; ?>">Hapus</a></td>
			</tr>
			<?php } } ?>
		</tbody>
	</table>
</div>
</div>
</div>
