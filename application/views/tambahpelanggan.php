<div style="margin:20px">
	<h3>Tambah Pelanggan</h3>
	<hr>
	<form method="post">
	<div class="form-group">
		<input type="text" name="nama" class="form-control" placeholder="Nama" autocomplete="off">
	</div>
	<div class="form-group">
		<input type="text" name="domisili" class="form-control" placeholder="Domisili" autocomplete="off">
	</div>
	<div class="form-group">
		<select name="jenis_kelamin" class="form-control">
			<option value="L">Laki-laki</option>
			<option value="P">Perempuan</option>
		</select>
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
<br>
<?php if ($error): ?>
	<div class="alert alert-warning">
		<?php echo $error ?>
	</div>
<?php endif ?>
</div>