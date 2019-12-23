<?php $__env->startSection('page-title', 'Tambah Data Pegawai'); ?>
<?php $__env->startSection('css-import'); ?>


<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2/css/select2.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')); ?>" />


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-12">
		<div id="error-message">

		</div>
		<form class="form-horizontal form-bordered" id="frm-data-diri">

			<section class="panel">
				<header class="panel-heading"></header>
				<div class="panel-body">

					<div class="form-group">
						<label class="col-md-3 control-label" for="nama">Nama</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="nama" name="nama">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="jenis_kelamin">Jenis Kelamin</label>
						<div class="col-md-6">
							<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
								<?php $__currentLoopData = _hJenisKelamin(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $jk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($k); ?>"><?php echo e($jk); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="jabatan">Jabatan</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="jabatan" id="jabatan" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="nip">NIP</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="nip" id="nip" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="tempat_lahir">Tempat Lahir</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="tanggal_lahir">Tanggal Lahir</label>
						<div class="col-md-6">
							<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="alamat">Alamat</label>
						<div class="col-md-6">
							<textarea name="alamat" id="alamat" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" >
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="pangkat_golongan">Pangkat/Golongan</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="pangkat_golongan" id="pangkat_golongan" >
						</div>
					</div>

					
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
					</div>
				</footer>

			</section>
		</form>

	</div>
	
</div>

<?php echo $__env->make('private.pegawai.modal_pegawai', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-inline'); ?>

<script>
	let $frmDataDiri = $("#frm-data-diri");


	$frmDataDiri.submit(function(e) {
		e.preventDefault();

		let formData = $(this).serializeArray();

		$.ajax({
			url: SITE_URL + 'private/pegawai/store_data_pegawai',
			type: 'POST',
			dataType: 'json',
			data: formData,
		})
		.done(function(resp) {
			$('#error-message').html("");
			if (resp.status == 'error') 
			{
				listError = '';
				$.each(resp.messages, function(index, val) {
					listError += '<li>'+val+'</li>';
				});
				$("#error-message").html(
					`<div class=\"alert alert-danger\">
					<strong>Ooops!</strong> Terdapat Error.<br><br>
					<ul>
					<strong>`
					+listError+
					`</strong>
					</li>
					</div>
					`);
				$("html, body").animate({scrollTop:$('#error-message').position().top}, 'slow');

			} else if (resp.status == 'success') 
			{
				swalInfo('Berhasil', 'success')
				.then(t => {
					location.href = SITE_URL + 'private/pegawai/edit/'+resp.pegawai_id;
					
				})
			}
		})
		.fail(function() {
		})
		.always(function() {
		});
		
	})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy-baru\application\views/private/pegawai/create.blade.php ENDPATH**/ ?>