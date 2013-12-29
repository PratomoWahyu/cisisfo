
<div class="container">
<div class="row">
<h3>Tambah Kategori</h3>
<div class="col-md-6">
<form action="<?php echo base_url(); ?>index.php/kategori/setkategori" method="POST" role="form">

<?php if (isset($hasiln)) {
	foreach ($hasiln as $datan) {
		?>
		<div class="form-group">
		<label for="">Kategori</label>
		<input type="text" class="form-control" id="nmkategori" name="nmkategori" value="<?php echo $datan->namaKategori; ?>">
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
				<th>ID Kategori</th>
				<th>Nama Kategori</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (isset($hasil)) {
				
			 foreach ($hasil as $data) { ?>
			<tr>
				<td><?php echo $data->idKategori; ?></td>
				<td><?php echo $data->namaKategori; ?></td>
				<td>Ubah | <a href="<?php echo base_url(); ?>index.php/kategori/delkategori/<?php echo $data->idKategori; ?>">Hapus</a></td>
			</tr>
			<?php } } ?>
		</tbody>
	</table>
</div>
</div>
</div>