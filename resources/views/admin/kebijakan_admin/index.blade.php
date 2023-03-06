@extends('admin.master') 
@section('isi')
<div class="wrapper">
	<!-- Preloader -->
	<div class="preloader flex-column justify-content-center align-items-center">
		<img class="animation__shake" src="assets/img/favicon.png" alt="AdminLTELogo" height="60" width="60">
	</div>
	<br>
		<div class="card-header">
			<h3 class="card-title">DataTable with default features</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<a href="{{ route('kebijakans.create') }}" class="btn btn-md btn-success mb-3">TAMBAH KEBIJAKAN</a>	<div class="card">
			<table id="example1" class="table table-bordered table-striped">
			<thead>
			<tr>
				<th>NAMA</th>
				<th>FILE</th>
				<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($kebijakans as $kebijakan)
					
				@empty
					
				@endforelse
			<tr>
				<td>Trident</td>
				<td>Internet Explorer 4.0</td>
				<td>Win 95+</td>
				<td>4</td>
			</tr>
			<tr>
				<td>Trident</td>
				<td>Internet Explorer 5.0</td>
				<td>Win 95+</td>
				<td>5</td>
				<td>C</td>
			</tr>
			<tr>
				<td>Trident</td>
				<td>Internet Explorer 5.5</td>
				<td>Win 95+</td>
				<td>5.5</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Trident</td>
				<td>Internet Explorer 6</td>
				<td>Win 98+</td>
				<td>6</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Trident</td>
				<td>Internet Explorer 7</td>
				<td>Win XP SP2+</td>
				<td>7</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Trident</td>
				<td>AOL browser (AOL desktop)</td>
				<td>Win XP</td>
				<td>6</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Firefox 1.0</td>
				<td>Win 98+ / OSX.2+</td>
				<td>1.7</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Firefox 1.5</td>
				<td>Win 98+ / OSX.2+</td>
				<td>1.8</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Firefox 2.0</td>
				<td>Win 98+ / OSX.2+</td>
				<td>1.8</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Firefox 3.0</td>
				<td>Win 2k+ / OSX.3+</td>
				<td>1.9</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Camino 1.0</td>
				<td>OSX.2+</td>
				<td>1.8</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Camino 1.5</td>
				<td>OSX.3+</td>
				<td>1.8</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Netscape 7.2</td>
				<td>Win 95+ / Mac OS 8.6-9.2</td>
				<td>1.7</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Netscape Browser 8</td>
				<td>Win 98SE+</td>
				<td>1.7</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Netscape Navigator 9</td>
				<td>Win 98+ / OSX.2+</td>
				<td>1.8</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Mozilla 1.0</td>
				<td>Win 95+ / OSX.1+</td>
				<td>1</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Mozilla 1.1</td>
				<td>Win 95+ / OSX.1+</td>
				<td>1.1</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Mozilla 1.2</td>
				<td>Win 95+ / OSX.1+</td>
				<td>1.2</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Mozilla 1.3</td>
				<td>Win 95+ / OSX.1+</td>
				<td>1.3</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Mozilla 1.4</td>
				<td>Win 95+ / OSX.1+</td>
				<td>1.4</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Mozilla 1.5</td>
				<td>Win 95+ / OSX.1+</td>
				<td>1.5</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Mozilla 1.6</td>
				<td>Win 95+ / OSX.1+</td>
				<td>1.6</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Mozilla 1.7</td>
				<td>Win 98+ / OSX.1+</td>
				<td>1.7</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Mozilla 1.8</td>
				<td>Win 98+ / OSX.1+</td>
				<td>1.8</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Seamonkey 1.1</td>
				<td>Win 98+ / OSX.2+</td>
				<td>1.8</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Gecko</td>
				<td>Epiphany 2.20</td>
				<td>Gnome</td>
				<td>1.8</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Webkit</td>
				<td>Safari 1.2</td>
				<td>OSX.3</td>
				<td>125.5</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Webkit</td>
				<td>Safari 1.3</td>
				<td>OSX.3</td>
				<td>312.8</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Webkit</td>
				<td>Safari 2.0</td>
				<td>OSX.4+</td>
				<td>419.3</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Webkit</td>
				<td>Safari 3.0</td>
				<td>OSX.4+</td>
				<td>522.1</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Webkit</td>
				<td>OmniWeb 5.5</td>
				<td>OSX.4+</td>
				<td>420</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Webkit</td>
				<td>iPod Touch / iPhone</td>
				<td>iPod</td>
				<td>420.1</td>
				<td>A</td>
			</tr>
			</tbody>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
</script>


@endsection