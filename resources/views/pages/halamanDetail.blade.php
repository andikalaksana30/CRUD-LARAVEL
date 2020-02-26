@extends('templates/main')

@section('title', 'Halaman Index')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h1>Detail Mahasiswa</h1>

			<div class="card">
			  <div class="card-body">
			    <h5 class="card-title">{{ $mhs->nama }}</h5>
			    <h6 class="card-subtitle mb-2 text-muted">{{ $mhs->email }}</h6>
			    <p class="card-text">{{ $mhs->jurusan }}</p>
			    
			    <a href="/mahasiswa/{{ $mhs->id }}/edit" class="btn btn-info">edit</a>

			    <form action="/mahasiswa/{{ $mhs->id }}" method="post" class="d-inline">
			    	@method('Delete')
			    	@csrf
			    	<button onClick="confirm('yakin')" type="submit" class="btn btn-danger" >delete</button>
			    </form>

			    <a href="/mahasiswa" class="btn btn-warning">kembali</a>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection