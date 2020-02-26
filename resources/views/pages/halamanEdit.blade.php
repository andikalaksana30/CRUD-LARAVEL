@extends('templates/main')

@section('title', 'Halaman Index')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h1>Form Tambah Data Mahasiswa</h1>

			<form method="post" action="/mahasiswa/{{ $mhs->id }}">
				@method('Patch')
				@csrf
				<div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" name="nama" value="{{ $mhs->nama }}">
				    @error('nama')
				    	<div class="invalid-feedback">{{ $message }}</div>
				    @enderror
				</div>

				<div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" name="email" value="{{ $mhs->email }}">
				    @error('email')
				    	<div class="invalid-feedback">{{ $message }}</div>
				    @enderror
				 </div>

				<div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <input type="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="jurusan" name="jurusan" value="{{ $mhs->jurusan }}" readonly>
				    @error('jurusan')
				    	<div class="invalid-feedback">{{ $message }}</div>
				    @enderror
				 </div>

				<button type="submit" class="btn btn-info">Submit!</button>
			</form>

		</div>
	</div>
</div>
@endsection