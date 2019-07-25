<?php $__env->startSection('css-import'); ?>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<div class="block-header">
		<h2>
			
			TAMBAH DATA PEGAWAI

		</h2>
	</div>
	<!-- Basic Examples -->
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header" style="border-bottom: none;">
					<h2>
						DATA DIRI
					</h2>
					<ul class="header-dropdown m-r--5">
						
					</ul>
				</div>
				<div class="body">
					<div id="error-message">

					</div>
					<form class="form-horizontal" id="frm-data-diri">

						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">Nama</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="nama" id="nama" >

									</div>
								</div>
							</div>
						</div>

						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">Jabatan</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="jabatan" id="jabatan" >
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">NIP</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="nip" id="nip" >
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">Tempat Lahir</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" >
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">Tanggal Lahir</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" >
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">Alamat</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="alamat" id="alamat" >
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">Pendidikan Terakhir</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" >
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">Pangkat/Golongan</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="pangkat_golongan" id="pangkat_golongan" >
										
									</div>
								</div>
							</div>
						</div>
						


						<div class="row clearfix">
							<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
								<button type="submit" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
							</div>
						</div>
					</form>

					
				</div>
			</div>
			
		</div>
	</div>
	<!-- #END# Basic Examples -->
	<!-- Exportable Table -->
	
	<!-- #END# Exportable Table -->
</div>


<!-- /.container -->





<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-import'); ?>

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
					`
					+listError+
					`
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
<?php echo $__env->make('layouts.backend2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy\application\views/private/pegawai/create.blade.php ENDPATH**/ ?>