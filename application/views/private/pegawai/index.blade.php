@extends('layouts.backend2')
@section('css-import')

<link href="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">


@endsection
@section('content')

<div class="container-fluid">
	<div class="block-header">
		<h2>
			
			DATA PEGAWAI

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
							<button class="btn btn-info btn-md" onclick="location.href='{{ site_url('private/pegawai/create') }}'" type="button">Tambah Pegawai</button>
							
						</li>
					</ul>
				</div>
				<div class="body">
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									
									<th>Nama</th>
									<th>Jabatan</th>
									<th>Nip</th>
									<th>Pangkat/Golongan</th>
									<th>Action</th>

								</tr>
							</thead>
							<tbody>

								@foreach ($dataPegawai as $pegawai)
								<tr>

									<td>{{ $pegawai->nama }}</td>
									<td>{{ $pegawai->jabatan }}</td>
									<td>{{ $pegawai->nip }}</td>
									<td>{{ $pegawai->pangkat_golongan }}</td>
									<td style="width: 1%; white-space: nowrap">
										<a class="btn btn-success" onclick="location.href='{{ site_url('private/pegawai/edit/'.$pegawai->id) }}'">Edit</a>
										<button type="button" class="btn btn-warning" onclick="delete_pegawai({{ $pegawai->id }})">Delete</button>
									</td>

								</tr>

								@endforeach

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




@include('private.user.modal_user')
@endsection
@section('js-import')
<!-- Jquery DataTable Plugin Js -->
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

@endsection

@section('js-inline')
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