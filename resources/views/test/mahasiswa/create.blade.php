@extends('layouts.master')

@section('title', 'Testing')

@section('content')
<div class="row m-4 justify-content-center">
	<div class="col-md-7">
		<h3 class="text-center m-3">Tambah Mahasiswa</h3>
		<form action="{{ route('mahasiswa.store') }}" method="post">
			@csrf
			<div class="card">
				<div class="card-body">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control">
					</div>
					<div class="form-group">
						<label for="tempat">Tempat</label>
						<input type="text" name="tempat" id="tempat" class="form-control">
					</div>
					<div class="form-group">
						<label for="tanggal_lahir">Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
					</div>
					<div class="form-group">
						<label for="hobi">Hobi</label>
						<input type="text" name="hobi" id="hobi" class="form-control">
					</div>
					<div class="form-group">
						<label for="ukt">UKT</label>
						<input type="number" name="ukt" id="ukt" class="form-control">
					</div>
					<div class="form-group text-right">
						<a href="{{ route('mahasiswa.index') }}" class="btn btn-warning btn-sm ">Kembali</a>
						<input type="submit" class="btn btn-success btn-sm" value="Simpan">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
