<?php if(!empty($tamu)): ?>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th width="10">No</th>
			<th width="200">Nama</th>
			<th width="140">Telp</th>
			<th>Alamat</th>
			<th width="100">Aksi</th>
		</tr>
		<?php foreach ($tamu as $item): ?>
		<tr>
			<td class="text-center"><?php echo htmlspecialchars($item->id,ENT_QUOTES,'UTF-8');  ?>.</td>
			<td><?php echo htmlspecialchars($item->nama,ENT_QUOTES,'UTF-8');  ?></td>
			<td><?php echo htmlspecialchars($item->telp,ENT_QUOTES,'UTF-8');  ?></td>
			<td><?php echo htmlspecialchars($item->alamat,ENT_QUOTES,'UTF-8');  ?></td>
			<td>	
				<a href="<?php echo site_url('home/edit/'.$item->id); ?>">Edit</a> | 
				<a href="<?php echo site_url('home/delete/'.$item->id); ?>">Hapus</a> 
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php /* echo $this->pagination->create_links(); */ ?>
<?php else: ?>
	<div class="alert alert-warning">
		<p>Data not found</p>
	</div>
<?php endif; ?>

  
