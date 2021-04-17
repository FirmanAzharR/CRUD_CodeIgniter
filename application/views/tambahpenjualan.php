<div style="margin:20px">
	<h3>Tambah Transaksi Penjualan</h3>
	<hr>
	<form method="post">
		<div class="form-group">
			<input type="date" min="<?php echo date("Y-m-d"); ?>" name="tgl" class="form-control">
		</div>
		<div class="form-group">
			<select name="kode_pelanggan" class="form-control">
				<option value="" disabled selected>Pilih Pelanggan</option>
				<?php foreach ($pelanggan as $key => $value): ?>
					<option value="<?php echo $value['id_pelanggan'] ?>"><?php echo $value['nama'] ?></option>
				<?php endforeach ?>
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