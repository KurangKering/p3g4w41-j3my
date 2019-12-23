@extends('layouts.backend3')
@section('page-title', 'Data Pengguna')

@section('css-import')

<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />

<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/select2/css/select2.css') }}" />
<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/pnotify/pnotify.custom.css') }}" />

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

						@foreach ($dataUsers as $user)
						<tr>

							<td>{{ $user->nama }}</td>
							<td>{{ $user->username }}</td>
							<td>{{ $user->email }}</td>
							<td style="width: 1%; white-space: nowrap">
								<button type="button" class="btn btn-default" onclick="show_modal({{ $user->id }})"><i class="fa fa-pencil"></i></button>
								<button type="button" class="btn btn-default" onclick="delete_user({{ $user->id }})"><i class="fa fa-trash-o"></i></button>

							</td>

						</tr>

						@endforeach

					</tbody>

				</table>
			</div>
		</section>
	</div>
	
</div>







@include('private.user.modal_user')
@endsection
@section('js-import')
<!-- Jquery DataTable Plugin Js -->
<script src="{{ site_url('assets/templates/backend3/assets/vendor/select2/js/select2.js') }}"></script>
<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}"></script>

<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>
<script src="{{ site_url('assets/templates/backend3/assets/vendor/select2/js/select2.js') }}"></script>
<script src="{{ site_url('assets/templates/backend3/assets/vendor/pnotify/pnotify.custom.js') }}"></script>

<script src="{{ site_url('assets/templates/backend3/assets/vendor/nprogress/nprogress.js') }}"></script>
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
</script>
@endsection
