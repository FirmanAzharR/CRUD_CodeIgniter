<div style="margin:20px">
	<h3>Edit Penjualan</h3>
	<hr>
	<form method="post">
		<div class="form-group">
			<input type="text" name="id_nota" class="form-control" placeholder="ID NOTA" autocomplete="off" value="<?php echo $penjualan["id_nota"] ?>" readonly>
		</div>
		<div class="form-group">
			<input type="date" min="<?php echo date("Y-m-d"); ?>"  name="tgl" class="form-control" value="<?php echo $penjualan["tgl"] ?>">
		</div>
		<div class="form-group">
			<select name="kode_pelanggan" class="form-control">
				<option value="" disabled selected>Pilih Pelanggan</option>
				<?php foreach ($pelanggan as $key => $value): ?>
					<option value="<?php echo $value['id_pelanggan'] ?>" <?php if ($penjualan['kode_pelanggan']==$value['id_pelanggan']) {
						echo "selected";
					} ?>><?php echo $value['nama'] ?></option>
				<?php endforeach ?>
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