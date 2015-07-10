<h1 class="text-right">Tambah Tamu</h1>
<div class="well">
	
	<form class="form-horizontal" method="post">
	  <div class="form-group">
		<label for="nama" class="col-sm-2 control-label">Nama</label>
		<div class="col-sm-10">
		  <input name="nama" type="text" class="form-control" id="nama" value="<?php echo set_value('nama'); ?>">
		</div>
	  </div>
	  <div class="form-group">
		<label for="telp" class="col-sm-2 control-label">Telepon</label>
		<div class="col-sm-10">
		  <input name="telp" type="text" class="form-control" id="telp" value="<?php echo set_value('telp'); ?>">
		</div>
	  </div>
	  <div class="form-group">
		<label for="alamat" class="col-sm-2 control-label">Alamat</label>
		<div class="col-sm-10">
		  <textarea name="alamat" class="form-control" id="alamat"><?php echo set_value('alamat'); ?></textarea>
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">Simpan</button>
		  <?php echo validation_errors(); ?>
		</div>
	  </div>
	</form>
</div>