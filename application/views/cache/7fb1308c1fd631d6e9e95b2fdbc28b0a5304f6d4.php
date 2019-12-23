<?php $__env->startSection('page-title', 'Data Pengguna'); ?>

<?php $__env->startSection('css-import'); ?>

<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2/css/select2.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')); ?>" />

<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2/css/select2.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/pnotify/pnotify.custom.css')); ?>" />

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
					<button class="btn btn-info btn-md" onclick="show_modal()" type="button">Tambah Pengguna</button>
					
					
				</div>
			</header>
			<div class="panel-body">
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
								<button type="button" class="btn btn-default" onclick="show_modal(<?php echo e($user->id); ?>)"><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-default" onclick="delete_user(<?php echo e($user->id); ?>)"><i class="fa fa-trash-o"></i></button>

							</td>

						</tr>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</tbody>

				</table>
			</div>
		</section>
	</div>
	
</div>







<?php echo $__env->make('private.user.modal_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-import'); ?>
<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2/js/select2.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>

<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2/js/select2.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/pnotify/pnotify.custom.js')); ?>"></script>

<script src="<?php echo e(site_url('assets/templates/backend3/assets/vendor/nprogress/nprogress.js')); ?>"></script>
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

<?php echo $__env->make('layouts.backend3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy-baru\application\views/private/user/index.blade.php ENDPATH**/ ?>