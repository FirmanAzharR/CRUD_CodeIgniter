<div style="margin:20px">
	<h3>Tambah Barang</h3>
	<hr>
	<form method="post">
		<div class="form-group">
			<input type="text" name="nama" class="form-control" placeholder="Nama Barang" autocomplete="off">
		</div>
		<div class="form-group">
			<select name="kategori" class="form-control">
				<option value="MASAK">MASAK</option>
				<option value="ELEKTRO">ELEKTRONIK</option>
				<option value="RT">RUMAH TANGGA</option>
				<option value="ATK">ATK</option>
			</select>
		</div>
		<div class="form-group">
			<input type="number" name="harga" class="form-control" placeholder="Harga Barang" autocomplete="off">
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