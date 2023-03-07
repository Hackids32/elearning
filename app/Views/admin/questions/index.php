<p>
	<a href="<?php echo base_url('admin/questions/add') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Add New
	</a>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="8%">Image</th>
			<th width="40%">Title</th>
			<th width="15%">Category</th>
			<th width="15%">Author - Status</th>
			<th>#</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($berita as $berita) { ?>
			<tr>
				<td><?php echo $no ?></td>
				<td>
					<?php if ($berita['gambar'] == "") {
						echo '-';
					} else { ?>
						<img src="http://localhost/compro-ci4-javawebmedia/assets/upload/image/thumbs/<?php echo $berita['gambar']; ?>" class="img img-thumbnail">
					<?php } ?>
				</td>
				<td><a href="<?php echo base_url('admin/questions/edit/' . $berita['id_berita']) ?>">
						<?php echo $berita['judul_berita'] ?>
					</a>
					<small>
						<br><i class="fa fa-eye"></i> Hits: <?php echo $berita['hits'] ?>
						<br><i class="fa fa-home"></i> Icon: <i class="<?php echo $berita['icon'] ?>"></i> <?php echo $berita['icon'] ?>
						<br><i class="fa fa-calendar-check"></i> Publish: <?php echo tanggal_bulan_menit($berita['tanggal_publish']) ?>
						<br><i class="fa fa-calendar"></i> Updated: <?php echo tanggal_bulan_menit($berita['tanggal']) ?>
					</small>
				</td>
				<td><small>
						<i class="fa fa-tags"></i> <a href="<?php echo base_url('admin/berita/kategori/' . $berita['id_kategori']) ?>">
							<?php echo $berita['nama_kategori'] ?>
						</a>
						<br><i class="fa fa-home"></i> <a href="<?php echo base_url('admin/berita/jenis_berita/' . $berita['jenis_berita']) ?>">
							<?php echo $berita['jenis_berita'] ?>
						</a>
					</small>
				</td>

				<td><small>
						<i class="fa fa-user"></i> <a href="<?php echo base_url('admin/questions/author/' . $berita['id_user']) ?>">
							<?php echo $berita['nama'] ?>
						</a>
						<br>
						<i class="fa fa-check"></i> <a href="<?php echo base_url('admin/questions/status_berita/' . $berita['status_berita']) ?>">
							<?php echo $berita['status_berita'] ?>
						</a>
					</small>
				</td>
				<td>
					<a href="<?php echo base_url('admin/questions/soal/' . $berita['id_berita']) ?>" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-eye"></i> Soal</a>
					<a href="<?php echo base_url('admin/questions/edit/' . $berita['id_berita']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/questions/delete/' . $berita['id_berita']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>