@extends('admin.master') 
@section('isi')
<div class="wrapper">
	<!-- Preloader -->
	<div class="preloader flex-column justify-content-center align-items-center">
		<img class="animation__shake" src="assets/img/favicon.png" alt="AdminLTELogo" height="60" width="60">
	</div>
	<br>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">Launch Large Modal</button>
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">DataTable with default features</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<table id="example1" class="table table-bordered table-striped">
			<thead>
			<tr>
				<th>Rendering engine</th>
				<th>Browser</th>
				<th>Platform(s)</th>
				<th>Engine version</th>
				<th>CSS grade</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Trident</td>
				<td>Internet Explorer 4.0</td>
				<td>Win 95+</td>
				<td>4</td>
				<td>X</td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<th>Rendering engine</th>
				<th>Browser</th>
				<th>Platform(s)</th>
				<th>Engine version</th>
				<th>CSS grade</th>
			</tr>
			</tfoot>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
@endsection