@extends('layouts.master')

@section('title', 'Test Fibonacci')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-7">
		<div class="card m-4">
			<div class="card-body">
				<h3 class="text-center">Fibonacci Count</h3>

				<form action="{{ route('fibonacci.count') }}" method="post">
					@csrf
					<div class="form-group">
						<label for="input">Data Count</label>
						<input type="text" name="count" id="input" class="form-control" value="{{ $count }}">
						
						<input type="submit" value="Hitung" class="btn btn-primary btn-block btn-sm mt-2">
					</div>
				</form>

				<div class="form-group">
					<label for="Hasil">Hasil</label>

					<div>
						@if (isset($arr_data))
							@foreach ($arr_data as $data)
								{{ $data . ' ' }}
							@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
