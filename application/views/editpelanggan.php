<div style="margin:20px">
	<h3>Edit Pelanggan</h3>
	<hr>
	<form method="post">
		<div class="form-group">
		<input type="text" name="id_pelanggan" class="form-control" placeholder="ID" autocomplete="off" value="<?php echo $pelanggan["id_pelanggan"] ?>" readonly>
	</div>
	<div class="form-group">
		<input type="text" name="nama" class="form-control" placeholder="Nama" autocomplete="off" value="<?php echo $pelanggan["nama"] ?>">
	</div>
	<div class="form-group">
		<input type="text" name="domisili" class="form-control" placeholder="Domisili" autocomplete="off" value="<?php echo $pelanggan["domisili"] ?>">
	</div>
	<div class="form-group">
		<select name="jenis_kelamin" class="form-control">
			<option value="L" <?php if ($pelanggan['jenis_kelamin']=='L') {
				echo "selected";
			} ?>>Laki-laki</option>
			<option value="P" <?php if ($pelanggan['jenis_kelamin']=='P') {
				echo "selected";
			} ?>>Perempuan</option>
		</select>
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Ubah</button>
	</div>
</form>
<br>
<?php if ($error): ?>
	<div class="alert alert-warning">
		<?php echo $error ?>
	</div>
<?php endif ?>
</div>