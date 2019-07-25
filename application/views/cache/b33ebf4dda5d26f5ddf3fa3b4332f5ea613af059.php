<?php $__env->startSection('css-import'); ?>

<link href="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')); ?>" rel="stylesheet">


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<div class="block-header">
		<h2>
			
			DASHBOARD

		</h2>
	</div>
	<!-- Basic Examples -->
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header" style="border-bottom: none;">
					
				</div>
				<div class="body">

					<h1>SELAMAT DATANG DI SISTEM ARSIP PEGWAWAI</h1>
					<p class="m-b-30"></p>

					
				</div>
			</div>
		</div>
	</div>
	<!-- #END# Basic Examples -->
	<!-- Exportable Table -->
	
	<!-- #END# Exportable Table -->
</div>


<!-- /.container -->




<?php echo $__env->make('private.user.modal_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-import'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-inline'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy\application\views/private/dashboard.blade.php ENDPATH**/ ?>