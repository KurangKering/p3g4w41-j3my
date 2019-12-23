@extends('layouts.backend3')
@section('page-title', 'Dashboard')
@section('css-import')


<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />


@endsection
@section('content')
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

@include('private.pegawai.modal_pegawai')
@endsection
@section('js-import')
<!-- Jquery DataTable Plugin Js -->
<script src="{{ site_url('assets/templates/backend3/assets/vendor/select2/js/select2.js') }}"></script>
<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}"></script>

<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>
@endsection

@section('js-inline')

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
@endsection