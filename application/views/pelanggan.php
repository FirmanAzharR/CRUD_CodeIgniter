<div style="margin: 20px">
	<h3>Pelanggan</h3>
	<hr>
	<table class="table table-bordered" id="myTable">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">ID Pelanggan</th>
				<th scope="col">Nama</th>
				<th scope="col">Domisili</th>
				<th scope="col">Jenis Kelamin</th>
				<th scope="col">Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php if ((count($pelanggan))!=0){ ?>
				<?php foreach ($pelanggan as $key => $value): ?>
					<tr>
						<th scope="row"><?php echo $key+1; ?></th>
						<td><?php echo $value["id_pelanggan"]; ?></td>
						<td><?php echo $value["nama"]; ?></td>
						<td><?php echo $value["domisili"]; ?></td>
						<td><?php echo $value["jenis_kelamin"]; ?></td>
						<td>
							<a href="<?php echo base_url("pelanggan/edit/$value[id_pelanggan]") ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
							<a href="<?php echo base_url("pelanggan/delete/$value[id_pelanggan]") ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach ?>
			<?php } else{?>
				<tr>
					<th colspan="6" style="text-align: center;">Data Pelanggan Kosong</th>
				</tr>
			<?php }?>
		</tbody>
	</table>
	<hr>
	<a href="<?php echo base_url('pelanggan/tambah') ?>" class="btn btn-success">Tambah Pelanggan</a>
</div>