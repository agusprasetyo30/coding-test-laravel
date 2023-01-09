@extends('layouts.master')

@section('title', 'Testing')

@section('content')
<div class="row m-4 justify-content-center">
	<div class="col-md-7">
		<h3 class="text-center m-3">Edit Mahasiswa</h3>
		<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
			@csrf
			@method('put')
			<div class="card">
				<div class="card-body">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control" value="{{ $mahasiswa->nama }}">
					</div>
					<div class="form-group">
						<label for="tempat">Tempat</label>
						<input type="text" name="tempat" id="tempat" class="form-control" value="{{ $mahasiswa->tempat }}">
					</div>
					<div class="form-group">
						<label for="tanggal_lahir">Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $mahasiswa->tanggal_lahir }}">
					</div>
					<div class="form-group">
						<label for="hobi">Hobi</label>
						<input type="text" name="hobi" id="hobi" class="form-control" value="{{ $mahasiswa->hobi }}">
					</div>
					<div class="form-group">
						<label for="ukt">UKT</label>
						<input type="number" name="ukt" id="ukt" class="form-control" value="{{ $mahasiswa->ukt }}">
					</div>
					<div class="form-group text-right">
						<a href="{{ route('mahasiswa.index') }}" class="btn btn-warning btn-sm ">Kembali</a>
						<input type="submit" class="btn btn-success btn-sm" value="Update">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
