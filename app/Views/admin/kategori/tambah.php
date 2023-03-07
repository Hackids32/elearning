<p>
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
		<i class="fa fa-plus"></i> Add New
	</button>
</p>
<?php
echo form_open(base_url('admin/kategori'));
echo csrf_field();
?>
<div class="modal fade" id="modal-default">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="form-group row">
					<label class="col-3">Category Name</label>
					<div class="col-9">
						<input type="text" name="nama_kategori" class="form-control" placeholder="Nama kategori" value="<?php echo set_value('nama_kategori') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Category Number</label>
					<div class="col-9">
						<input type="number" name="urutan" class="form-control" placeholder="Nomor urut kategori" value="<?php echo set_value('urutan') ?>" required>
					</div>
				</div>

			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php echo form_close(); ?>