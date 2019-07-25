<?php $__env->startSection('css-import'); ?>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('css-inline'); ?>
<style>
	
	.dz-img img {
		width: 100%;
		height: 100%;
	}

	.table-berkas tbody tr{

		border-bottom: 2px solid;
		border-top: 2px solid;
	}

	.table-berkas > tbody > tr:hover {
		background-color: #CDDC39 !important;
	}
</style>	
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<div class="block-header">
		<h2>
			
			UBAH DATA PEGAWAI

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
						<input type="hidden" name="pegawai_id" value="<?php echo e($dataPegawai->id); ?>">
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">nama</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="nama" id="nama" placeholder="nama" value="<?php echo e($dataPegawai->nama); ?>">

									</div>
								</div>
							</div>
						</div>

						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">jabatan</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="jabatan" value="<?php echo e($dataPegawai->jabatan); ?>">
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">nip</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="nip" id="nip" placeholder="nip" value="<?php echo e($dataPegawai->nip); ?>">
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">tempat_lahir</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="tempat_lahir" value="<?php echo e($dataPegawai->tempat_lahir); ?>">
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">tanggal_lahir</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal_lahir" value="<?php echo e($dataPegawai->tanggal_lahir); ?>">
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">alamat</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat" value="<?php echo e($dataPegawai->alamat); ?>">
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">pendidikan_terakhir</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="pendidikan_terakhir" value="<?php echo e($dataPegawai->pendidikan_terakhir); ?>">
										
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">pangkat_golongan</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="pangkat_golongan" id="pangkat_golongan" placeholder="pangkat_golongan" value="<?php echo e($dataPegawai->pangkat_golongan); ?>">
										
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
			<div class="card">
				<div class="header" style="border-bottom: none;">
					<h2>
						DAFTAR BERKAS
					</h2>
					<ul class="header-dropdown m-r--5">
						
					</ul>
				</div>
				<div class="body">
					<div id="error-berkas-kosong">
						<?php if(count($dataPegawai->data_dokumen) <= 0  ): ?>
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
							HARAP MENGUNDUH BERKAS-BERKAS
						</div>
						<?php endif; ?>
					</div>
					<table class="table table-berkas table-hover">
						<thead>
							<tr>
								<th class="text-center" >BERKAS</th>
								<th class="text-center" >UPLOAD LOC</th>
								<th class="text-center" >PREVIEW</th>
								<th class="text-center" >STATUS</th>
							</tr>
						</thead>
						<?php
						

						?>
						<tbody>
							<?php $__currentLoopData = hBerkasDokumen(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dokumen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
							<tr>
								<td style="width: 25%; vertical-align: middle; letter-spacing: 5px; font-size: 20px"><?php echo e($dokumen['caption']); ?></td>
								<td style="width: 30%">
									<form action="<?php echo e(site_url('private/pegawai/upload_berkas')); ?>" class="dropzone" id="frm-<?php echo e($dokumen['html']); ?>">
										
									</form>
								</td>
								<td style="width: 30%">

									<?php
									$srcImg = site_url('media/'.$dataPegawai->data_dokumen[$key]);
									?>
									<div class="preview-area" id="preview-area-<?php echo e($dokumen['html']); ?>">
										<a href="<?php echo e($srcImg); ?>" id="hrefImg-<?php echo e($dokumen['html']); ?>">
											<img width="100%" style="max-height: 150px" src="<?php echo e(site_url('media/'.$dataPegawai->data_dokumen[$key])); ?>" alt="" id="img-preview-<?php echo e($dokumen['html']); ?>">
										</a>

									</div>	
								</td>
								<td style="width: 15%">
									<div id="status-<?php echo e($dokumen['html']); ?>">
										<?php if($dataPegawai->data_dokumen->$key): ?>
										<button style="width: 100%;" type="button" class="btn btn-success waves-effect waves-float">
											<i class="material-icons">done</i>
										</button>
										<?php else: ?>
										<button style="width: 100%;" type="button" class="btn btn-warning waves-effect waves-float">
											<i class="material-icons">cancel</i>
										</button>
										<?php endif; ?>
									</div>
									
									
								</td>
								
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>



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

	let adaDokumen = "<?php echo e(count($dataPegawai->data_dokumen) > 0 ? '1' : '0'); ?>";

	if (adaDokumen == '0') {

		$('html, body').animate({
			scrollTop: $("#error-berkas-kosong").offset().top
		}, 2000);
	}

	<?php
	$arrayBerkas= hBerkasDokumen();
	$jsArrayBerkas = json_encode($arrayBerkas);
	echo "let arrayBerkas = ". $jsArrayBerkas . ";\n";
	?>

	$.each(arrayBerkas, function(index, val) {
		indexOption = camelize('frm-' + val['html']);
		lightGallery(document.getElementById("preview-area-"+val['html']));

		Dropzone.options[indexOption] = {
			maxFiles: 1,
			maxFilesize : 2,
			uploadMultiple : false,
			thumbnailWidth: null,
			thumbnailHeight: null,
			acceptedFiles: 'image/*',


			accept: function(file, done) {
				done();
			},
			init: function() {

				this.on("addedfile", function() {
					if (this.files[1]!=null){
						this.removeFile(this.files[0]);
					}
				});
				this.on("sending", function(data, xhr, formData) {
					formData.append("berkas", index);
					formData.append("pegawai_id", $("input[name='pegawai_id']").val());
				});
				this.on("thumbnail", function(file, dataUrl) {
					$('.dz-image').last().find('img').attr({width: '100%', height: '100%'});
				}),


				this.on("success", function(file, responseText) {
					file.previewElement.remove(); 

					$("#frm-"+val['html']).removeClass('dz-started');

					$('.dz-image').css({"width":"100%", "height":"auto"});
					resp = responseText[0];
					$img = $("#img-preview-"+val['html']);
					$hrefImg = $("#hrefImg-"+val['html']);
					urlImage = SITE_URL + 'media/'+resp['file_name'];
					if (resp['status'] == 'success') {
						$img.attr('src', urlImage );
						$hrefImg.attr('href',  urlImage);
						$img.attr('width', '100%');
						$img.attr('height', '100%');

					}

					$("#status-"+val['html']).html(`
						<button style="width: 100%;" type="button" class="btn btn-success waves-effect waves-float">
						<i class="material-icons">done</i>
						</button>
						`);

					console.log(responseText);
				});


			}
		};

	});


	let $frmDataDiri = $("#frm-data-diri");


	$frmDataDiri.submit(function(e) {
		e.preventDefault();

		let formData = $(this).serializeArray();

		$.ajax({
			url: SITE_URL + 'private/pegawai/update_data_pegawai',
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

			} else if(resp.status =='success')
			{
				swalInfo('Berhasil','success', 'Berhasil merubah Data')
				.then(t => {
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
<?php echo $__env->make('layouts.backend2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy\application\views/private/pegawai/edit.blade.php ENDPATH**/ ?>