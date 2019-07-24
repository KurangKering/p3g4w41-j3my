<?php $__env->startSection('css'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main class="main">
	<!-- Breadcrumb-->
	<ol class="breadcrumb"></ol>
	<div class="container-fluid">
		<div class="animated fadeIn">
			<!-- /.row-->
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">Data Lembar Disposisi

						</div>
						<div class="card-body">
							<table class="table table-striped" id="table-ruangan">
								<thead>                                 
									<tr>
										
										<th>ID</th>
										<th>Posisi</th>
										<th>File</th>
										<th>Status</th>
										<th>Tanggal</th>
										<th>Data Peminjaman</th>
										<th class="">Action</th>
									</tr>
								</thead>
								<tbody>

									<?php $__currentLoopData = $dataLembar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lembar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($lembar->id); ?></td>
										<td><?php echo e($lembar->position); ?></td>
										<td><?php echo e($lembar->file); ?></td>
										<td><?php echo e($lembar->status); ?></td>
										<td><?php echo e($lembar->tanggal); ?></td>
										<td><?php echo e($lembar->peminjaman_ruangan->id); ?></td>
										<td>
											<button class="btn btn-warning" onclick="show_modal(<?php echo e($peminjaman->id); ?>)">Isi Disposisi</button>

											<button class="btn btn-danger" onclick="delete_ruangan(<?php echo e($lembar->id); ?>)">Hapus</button>
										</td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /.col-->
			</div>
			<!-- /.row-->
		</div>
	</div>
</main>
<?php echo $__env->make('private.lembar_disposisi.modal_isi_disposisi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!-- JS Libraies -->

<script>

	
	$("#table-ruangan").dataTable({
		"columnDefs": [
		{ "sortable": false, "targets": [2] }
		]
	});
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\kp-edu\application\views/private/lembar_disposisi/index.blade.php ENDPATH**/ ?>