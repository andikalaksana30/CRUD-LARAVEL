@extends('templates/main')

@section('title', 'Halaman Index')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h1>Daftar Mahasiswa</h1>

			<a href="/mahasiswa/create" class="btn btn-info my-3">Tambah Data Mahasiswa</a>

			@if (session('status'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  {{ session('status') }}
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			@endif

			<ul class="list-group">

			  @foreach( $mahasiswa as $mhs )
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    {{ $mhs->nama }}
			    <a class="badge badge-info badge-pill" href="/mahasiswa/{{ $mhs->id }}">detail</a>
			  </li>
			  @endforeach
			  
			</ul>
		</div>
	</div>
</div>
@endsection