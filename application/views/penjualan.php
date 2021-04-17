<div style="margin: 20px">
	<h3>Penjualan</h3>
	<hr>
	<table class="table table-bordered" id="myTable">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nota</th>
				<th scope="col">Tanggal Transaksi</th>
				<th scope="col">Kode Pelanggan</th>
				<th scope="col">Subtotal</th>
				<th scope="col">Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php if ((count($penjualan))!=0){ ?>
				<?php foreach ($penjualan as $key => $value): ?>
					<tr>
						<th scope="row"><?php echo $key+1; ?></th>
						<td><?php echo $value["id_nota"]; ?></td>
						<td><?php echo date('d F Y', strtotime($value['tgl'])) ?></td>
						<td><?php echo $value["nama"]; ?></td>
						<td>Rp.&nbsp;<?php echo $value["subtotal"]; ?></td>
						<td>
							<a href="<?php echo base_url("penjualan/edit/$value[id_nota]") ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
							<a href="<?php echo base_url("penjualan/additem/$value[id_nota]") ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a>
							<a href="<?php echo base_url("penjualan/delete/$value[id_nota]") ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach ?>
			<?php } else{?>
				<tr>
					<th colspan="6" style="text-align: center;">Transaksi Penjualan Kosong</th>
				</tr>
			<?php }?>
		</tbody>
	</table>
	<hr>
	<a href="<?php echo base_url('penjualan/tambah') ?>" class="btn btn-success">Tambah Penjualan</a>
</div>