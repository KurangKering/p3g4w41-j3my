<?php $__env->startSection('page-title', 'Dashboard'); ?>
<?php $__env->startSection('css-import'); ?>


<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2/css/select2.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')); ?>" />


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-12">

		<section class="section">
			<div class="container">
				<div class="row center">
					<div class="col-md-12 mb-xlg">
						<h2 class="text-dark mb-xs text-weight-light mt-xlg">Selamat Datang Di <strong>Sistem Arsip Pegawai</strong></h2>
						

						
					</div>
				</div>
				
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
<?php echo $__env->make('layouts.backend3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy-baru\application\views/private/dashboard.blade.php ENDPATH**/ ?>