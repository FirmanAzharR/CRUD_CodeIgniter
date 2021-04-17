<div style="margin:20px">
	<h3>Edit Barang</h3>
	<hr>
	<form method="post">
		<div class="form-group">
			<input type="text" name="kode" class="form-control" placeholder="Kode" autocomplete="off" value="<?php echo $barang["kode"] ?>" readonly>
		</div>
		<div class="form-group">
			<input type="text" name="nama" class="form-control" placeholder="Nama Barang" autocomplete="off" value="<?php echo $barang["nama"] ?>">
		</div>
		<div class="form-group">
			<select name="kategori" class="form-control">
				<option value="MASAK" <?php if ($barang['kategori']=='MASAK') {
					echo "selected";
				} ?>>MASAK</option>
				<option value="ELEKTRO" <?php if ($barang['kategori']=='ELEKTRO') {
					echo "selected";
				} ?>>ELEKTRONIK</option>
				<option value="RT" <?php if ($barang['kategori']=='RT') {
					echo "selected";
				} ?>>RUMAH TANGGA</option>
				<option value="ATK" <?php if ($barang['kategori']=='ATK') {
					echo "selected";
				} ?>>ATK</option>
			</select>
		</div>
		<div class="form-group">
			<input type="number" name="harga" class="form-control" placeholder="Harga Barang" autocomplete="off" value="<?php echo $barang["harga"] ?>">
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