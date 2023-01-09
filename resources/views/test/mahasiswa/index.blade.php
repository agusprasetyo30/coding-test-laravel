@extends('layouts.master')

@section('title', 'Testing')

@section('content')
<div class="row m-4 justify-content-center">
	<div class="col-md-10">
		<h3 class="text-center">CRUD Mahasiswa</h3>
		
		<div class="float-right">
			<a href="#" class="btn btn-warning btn-sm">Kembali</a>
			<a href="{{ route('mahasiswa.create') }}" class="btn btn-success btn-sm">Add Data</a>
		</div>
		<table class="table table-striped table-hover table-bordered mahasiswa_datatables">
			<thead>
				<tr>
					<th width="15%">Nama</th>
					<th width="18%">Tempat/Tanggal Lahir</th>
					<th width="15%">Hobi</th>
					<th width="10%">UKT</th>
					<th width="15%">Created By</th>
					<th width="15%">Updated By</th>
					<th width="12%">Actions</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
@endsection

@push('js')
	<script src="{{ asset('js/frontend/mahasiswa/mahasiswa_datatables.js')}}"></script>
@endpush
