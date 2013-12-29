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