@extends('layouts.backend3')
@section('page-title', 'Data Pegawai')
@section('css-import')


<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />


@endsection
@section('content')
<div class="row">
	<div class="col-md-12">

		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
				</div>

				<div class="panel-title">
					
					<button class="btn btn-info btn-md" onclick="window.open('{{ site_url('private/pegawai/cetak?type=all') }}', '_blank')" type="button">Cetak Semua <i class="fa fa-print"></i></button>
					<button class="btn btn-info btn-md" onclick="location.href='{{ site_url('private/pegawai/create') }}'" type="button">											Tambah <i class="fa fa-plus"></i>
					</button>
					
					
				</div>
			</header>
			<div class="panel-body">
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
								<button type="button" class="btn btn-default" onclick="show_detail({{ $pegawai->id }})" ><i class="fa fa-address-card"></i></button>
								<button type="button" class="btn btn-default" onclick="print_pegawai({{ $pegawai->id }})" ><i class="fa fa-print"></i></button>
								<button type="button" class="btn btn-default" onclick="location.href='{{ site_url('private/pegawai/edit/'.$pegawai->id) }}'"><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-default" onclick="delete_pegawai({{ $pegawai->id }})"><i class="fa fa-trash-o"></i></button>



							</td>

						</tr>

						@endforeach

					</tbody>

				</table>
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