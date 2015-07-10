<h1 class="text-right">Edit Tamu</h1>
<div class="well">
	<form class="form-horizontal" method="post" style="min-height:300px">
	  <div class="form-group">
		<label for="nama" class="col-sm-2 control-label">Nama</label>
		<div class="col-sm-10">
		  <input name="nama" type="text" class="form-control" id="nama" value="<?echo $tamu->nama; ?>">
		</div>
	  </div>
	  <div class="form-group">
		<label for="telp" class="col-sm-2 control-label">Telepon</label>
		<div class="col-sm-10">
		  <input name="telp" type="text" class="form-control" id="telp" value="<?echo $tamu->telp; ?>">
		</div>
	  </div>
	  <div class="form-group">
		<label for="alamat" class="col-sm-2 control-label">Alamat</label>
		<div class="col-sm-10">
		  <textarea name="alamat" class="form-control" id="alamat"><?echo $tamu->alamat; ?></textarea>
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