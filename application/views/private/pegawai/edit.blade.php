@extends('layouts.backend2')
@section('css-import')



@endsection
@section('css-inline')
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
@endsection
@section('content')

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
						<input type="hidden" name="pegawai_id" value="{{ $dataPegawai->id }}">
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label for="email_address_2">nama</label>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" name="nama" id="nama" placeholder="nama" value="{{ $dataPegawai->nama }}">

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
										<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="jabatan" value="{{ $dataPegawai->jabatan }}">
										
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
										<input type="text" class="form-control" name="nip" id="nip" placeholder="nip" value="{{ $dataPegawai->nip }}">
										
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
										<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="tempat_lahir" value="{{ $dataPegawai->tempat_lahir }}">
										
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
										<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal_lahir" value="{{ $dataPegawai->tanggal_lahir }}">
										
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
										<input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat" value="{{ $dataPegawai->alamat }}">
										
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
										<input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="pendidikan_terakhir" value="{{ $dataPegawai->pendidikan_terakhir }}">
										
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
										<input type="text" class="form-control" name="pangkat_golongan" id="pangkat_golongan" placeholder="pangkat_golongan" value="{{ $dataPegawai->pangkat_golongan }}">
										
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
						@if (count($dataPegawai->data_dokumen) <= 0  )
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
							HARAP MENGUNDUH BERKAS-BERKAS
						</div>
						@endif
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
						@php
						

						@endphp
						<tbody>
							@foreach (hBerkasDokumen() as $key => $dokumen)	
							<tr>
								<td style="width: 25%; vertical-align: middle; letter-spacing: 5px; font-size: 20px">{{ $dokumen['caption'] }}</td>
								<td style="width: 30%">
									<form action="{{ site_url('private/pegawai/upload_berkas') }}" class="dropzone" id="frm-{{ $dokumen['html'] }}">
										
									</form>
								</td>
								<td style="width: 30%">

									@php
									$srcImg = site_url('media/'.$dataPegawai->data_dokumen[$key]);
									@endphp
									<div class="preview-area" id="preview-area-{{ $dokumen['html'] }}">
										<a href="{{ $srcImg }}" id="hrefImg-{{ $dokumen['html'] }}">
											<img width="100%" style="max-height: 150px" src="{{ site_url('media/'.$dataPegawai->data_dokumen[$key]) }}" alt="" id="img-preview-{{ $dokumen['html'] }}">
										</a>

									</div>	
								</td>
								<td style="width: 15%">
									<div id="status-{{ $dokumen['html'] }}">
										@if ($dataPegawai->data_dokumen->$key)
										<button style="width: 100%;" type="button" class="btn btn-success waves-effect waves-float">
											<i class="material-icons">done</i>
										</button>
										@else
										<button style="width: 100%;" type="button" class="btn btn-warning waves-effect waves-float">
											<i class="material-icons">cancel</i>
										</button>
										@endif
									</div>
									
									
								</td>
								
							</tr>
							@endforeach
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




{{-- @include('private.user.modal_user') --}}
@endsection
@section('js-import')

@endsection

@section('js-inline')
<script>

	let adaDokumen = "{{ count($dataPegawai->data_dokumen) > 0 ? '1' : '0'  }}";

	if (adaDokumen == '0') {

		$('html, body').animate({
			scrollTop: $("#error-berkas-kosong").offset().top
		}, 2000);
	}

	@php
	$arrayBerkas= hBerkasDokumen();
	$jsArrayBerkas = json_encode($arrayBerkas);
	echo "let arrayBerkas = ". $jsArrayBerkas . ";\n";
	@endphp

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
@endsection