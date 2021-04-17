<div style="margin: 20px">
	<h3>Barang</h3>
	<hr>
	<table class="table table-bordered" id="myTable">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Kode</th>
				<th scope="col">Nama</th>
				<th scope="col">Kategori</th>
				<th scope="col">Harga</th>
				<th scope="col">Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php if ((count($barang))!=0){ ?>
				<?php foreach ($barang as $key => $value): ?>
					<tr>
						<th scope="row"><?php echo $key+1; ?></th>
						<td><?php echo $value["kode"]; ?></td>
						<td><?php echo $value["nama"]; ?></td>
						<td><?php echo $value["kategori"]; ?></td>
						<td>Rp.&nbsp;<?php echo $value["harga"]; ?></td>
						<td>
							<a href="<?php echo base_url("barang/edit/$value[kode]") ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
							<a href="<?php echo base_url("barang/delete/$value[kode]") ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach ?>
			<?php } else{?>
				<tr>
					<th colspan="6" style="text-align: center;">Barang Kosong</th>
				</tr>
			<?php }?>
		</tbody>
	</table>
	<hr>
	<a href="<?php echo base_url('barang/tambah') ?>" class="btn btn-success">Tambah Barang</a>
</div>