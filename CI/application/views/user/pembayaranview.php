<div class="left-content">
	<!--content-->
	<div class="content">
		<div class="women_main">
				<div class="row">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Harga</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; $total = 0; foreach($data as $item){?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $item->kode_part; ?></td>
								<td><?php echo $item->nama_part; ?></td>
								<td><?php echo $item->harga_ref_part; ?></td>
								<td><a href="<?php echo site_url('HomeUserController/deletePembelian/'.$item->id_part); ?>" class="btn btn-danger">delete</a></td>
							</tr>
							<?php $i++; $total = $total + $item->harga_ref_part;} ?>
						</tbody>
					</table>
				</div><br>
				<?php if($pelanggan != null){ ?>
				<div class="row">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Nama Pemilik</th>
								<th>Alamat Pemilik</th>
								<th>No Polisi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pelanggan as $tmp) {?>
							<tr>
								<td><?php echo $tmp->nama_pelanggan; ?></td>
								<td><?php echo $tmp->alamat_pelanggan; ?></td>
								<td><?php echo $tmp->plat_nomor; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<?php } ?>
				<div class="row">
					<div class="col-md-4">
						<p>Total Bayar: Rp.<?php echo $total; ?></p>
					</div>
				</div>
				<a href="<?php echo site_url('HomeUserController/printPembayaran'); ?>" class="btn btn-success">print</a>
				<a href="<?php echo site_url('HomeUserController/bayar'); ?>" class="btn btn-primary">Bayar</a>
			</main>
		</div>
    </div>
