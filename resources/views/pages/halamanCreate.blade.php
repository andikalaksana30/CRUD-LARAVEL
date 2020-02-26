@extends('templates/main')

@section('title', 'Halaman Index')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h1>Form Tambah Data Mahasiswa</h1>

			<form method="post" action="/mahasiswa">
				@csrf
				<div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" name="nama" value="{{ old('nama') }}">
				    @error('nama')
				    	<div class="invalid-feedback">{{ $message }}</div>
				    @enderror
				</div>

				<div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" name="email" value="{{ old('email') }}">
				    @error('email')
				    	<div class="invalid-feedback">{{ $message }}</div>
				    @enderror
				 </div>

				<div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				      <option>pilih jurusan</option>
				      <option>Sistem Informasi</option>
				      <option>Sosiologi</option>
				      <option>Kimia</option>
				      <option>Psikologi</option>
				      <option>Industri</option>
				    </select>
				</div>

				<button type="submit" class="btn btn-info">Submit!</button>
			</form>

		</div>
	</div>
</div>
@endsection