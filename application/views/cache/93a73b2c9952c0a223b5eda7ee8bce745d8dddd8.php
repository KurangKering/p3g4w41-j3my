<?php $__env->startSection('page-title', 'Data Pegawai'); ?>
<?php $__env->startSection('css-import'); ?>


<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2/css/select2.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')); ?>" />


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-12">

		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
				</div>

				<div class="panel-title">
					
					<button class="btn btn-info btn-md" onclick="window.open('<?php echo e(site_url('private/pegawai/cetak?type=all')); ?>', '_blank')" type="button">Cetak Semua <i class="fa fa-print"></i></button>
					<button class="btn btn-info btn-md" onclick="location.href='<?php echo e(site_url('private/pegawai/create')); ?>'" type="button">											Tambah <i class="fa fa-plus"></i>
					</button>
					
					
				</div>
			</header>
			<div class="panel-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>

							<th>Nama</th>
							<th>Jabatan</th>
							<th>Nip</th>
							<th>Pangkat/Golongan</th>
							<th>Action</th>

						</tr>
					</thead>
					<tbody>

						<?php $__currentLoopData = $dataPegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>

							<td><?php echo e($pegawai->nama); ?></td>
							<td><?php echo e($pegawai->jabatan); ?></td>
							<td><?php echo e($pegawai->nip); ?></td>
							<td><?php echo e($pegawai->pangkat_golongan); ?></td>
							<td style="width: 1%; white-space: nowrap">
								<button type="button" class="btn btn-default" onclick="show_detail(<?php echo e($pegawai->id); ?>)" ><i class="fa fa-address-card"></i></button>
								<button type="button" class="btn btn-default" onclick="print_pegawai(<?php echo e($pegawai->id); ?>)" ><i class="fa fa-print"></i></button>
								<button type="button" class="btn btn-default" onclick="location.href='<?php echo e(site_url('private/pegawai/edit/'.$pegawai->id)); ?>'"><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-default" onclick="delete_pegawai(<?php echo e($pegawai->id); ?>)"><i class="fa fa-trash-o"></i></button>



							</td>

						</tr>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</tbody>

				</table>
			</div>


			

		</section>
	</div>
	
</div>

<?php echo $__env->make('private.pegawai.modal_pegawai', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-import'); ?>
<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2/js/select2.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>

<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-inline'); ?>


<script>
	$(function () {
		$('#example1').DataTable({
		})
	})


	function delete_pegawai(id)
	{
		Swal.fire({
			title: 'Yakin Ingin Menghapus Pegawai ?',
			showCancelButton: true,
			type: 'warning',
			allowOutsideClick : false,
		})
		.then(clicked => {
			if (clicked.value) 
			{
				$.ajax({
					url: SITE_URL + 'private/pegawai/delete_pegawai/',
					type: 'POST',
					dataType: 'json',
					data: {pegawai_id : id},
				})
				.done(function(resp) {
					console.log(resp);

					Swal.fire({
						title: 'Berhasil Menghapus Data Pegawai',
						showCancelButton: false,
						showConfirmButton: false,
						timer: 2000,
						type: 'success',
						allowOutsideClick : false,
					})
					.then(sw => {
						location.reload();
					})
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});

			}
		})
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy-baru\application\views/private/pegawai/index.blade.php ENDPATH**/ ?>