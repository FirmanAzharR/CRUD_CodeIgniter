<div style="margin:20px">
	<h3>Pilih Barang</h3>
	<hr>
	<div class="form-group">
		<input type="text" name="id_nota" class="form-control" readonly value="<?php echo $penjualan['id_nota'] ?>">
	</div>
	<div class="form-group">
		<input type="text" name="nama" class="form-control" readonly value="<?php echo $pelanggan['nama'] ?>">
	</div>
	<div class="form-group">
		<input type="date" name="nama" class="form-control" readonly value="<?php echo $penjualan['tgl'] ?>">
	</div>	
	<form method="post">
		<hr>
		<h5>Tambah item barang</h5>
		<input type="hidden" name="nota" class="form-control" value="<?php echo $penjualan['id_nota'] ?>">
		<select class="form-control" name="kode_barang">
			<option value="" disabled selected>Pilih Barang</option>
			<?php foreach ($barang as $key => $value): ?>
				<option value="<?php echo $value['kode'] ?>"><?php echo $value['nama'] ?></option>
			<?php endforeach ?>
		</select>
		<br>
		<button class="btn btn-success">Add</button>	
	</form>
	<br>
	<?php if ($error): ?>
		<div class="alert alert-warning">
			<?php echo $error ?>
		</div>
	<?php endif ?>
	<hr>
	<h6>Daftar Barang</h6>
	<table class="table table-bordered" id="myTable">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Barang</th>
				<th scope="col">Harga</th>
			</tr>
		</thead>
		<tbody>
			<?php if ((count($items))!=0){ ?>
				<?php foreach ($items as $key => $value): ?>
					<tr>
						<th scope="row"><?php echo $key+1; ?></th>
						<td><?php echo $value["nama"]; ?></td>
						<td>Rp. <?php echo $value["harga"]; ?></td>
					</tr>
				<?php endforeach ?>
			<?php } else{?>
				<tr>
					<th colspan="6" style="text-align: center;">Item Kosong</th>
				</tr>
			<?php }?>
		</tbody>
	</table>
</div>