@extends('layouts.backend2')
@section('css-import')

<link href="{{ site_url('assets/templates/backend2/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">


@endsection
@section('content')

<div class="container-fluid">
	<div class="block-header">
		<h2>
			
			DASHBOARD

		</h2>
	</div>
	<!-- Basic Examples -->
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header" style="border-bottom: none;">
					
				</div>
				<div class="body">

					<h1>SELAMAT DATANG DI SISTEM ARSIP PEGWAWAI</h1>
					<p class="m-b-30"></p>

					
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
@endsection

@section('js-inline')

@endsection