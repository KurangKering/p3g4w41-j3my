<?php $__env->startSection('css-import'); ?>

<link href="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')); ?>" rel="stylesheet">


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<div class="block-header">
		<h2>
			
			DATA PENGGUNA

		</h2>
	</div>
	<!-- Basic Examples -->
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header" style="border-bottom: none;">
					<h2>
					</h2>
					<ul class="header-dropdown m-r--5">
						<li class="dropdown">
							<button class="btn btn-info btn-md" onclick="show_modal()" type="button">Tambah Pengguna</button>
							
						</li>
					</ul>
				</div>
				<div class="body">
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Username</th>
									<th>Email</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

								<?php $__currentLoopData = $dataUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									
									<td><?php echo e($user->nama); ?></td>
									<td><?php echo e($user->username); ?></td>
									<td><?php echo e($user->email); ?></td>
									<td style="width: 1%; white-space: nowrap">
										<a class="btn btn-success" onclick="show_modal(<?php echo e($user->id); ?>)">Edit</a>
										<button type="button" class="btn btn-warning" onclick="delete_user(<?php echo e($user->id); ?>)">Delete</button>
									</td>

								</tr>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</tbody>

						</table>
					</div>
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
<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/jszip.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/buttons.print.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js-inline'); ?>
<script>
	$(function () {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging'      : true,
			'lengthChange': false,
			'searching'   : false,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : false
		})
	})
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy\application\views/private/user/index.blade.php ENDPATH**/ ?>