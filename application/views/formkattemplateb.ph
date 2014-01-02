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
