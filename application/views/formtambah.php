
<div class="container">
<div class="row">
<h3>Tambah Kategori</h3>
<div class="col-md-6">
<form action="<?php echo base_url(); ?>index.php/kategori/setkategori" method="POST" role="form">

	<div class="form-group">
		<label for="">Kategori</label>
		<input type="text" class="form-control" id="nmkategori" name="nmkategori" placeholder="Nama Kategori">
	</div>

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
				<td><a href="<?php echo base_url(); ?>index.php/kategori/editkategori/<?php echo $data->idKategori; ?>">Ubah</a> | 
				<a href="<?php echo base_url(); ?>index.php/kategori/delkategori/<?php echo $data->idKategori; ?>">Hapus</a></td>
			</tr>
			<?php } } ?>
		</tbody>
	</table>
</div>
</div>
</div>