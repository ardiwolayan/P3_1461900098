@extends('0098layout')
@section('content')


<main role="main" class="flex-shrink0">
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-4">
				<div class="card-header bg-transparent mb-0">
					<h5 class="text-center">Edit <span class="font-weight-bold text-primary">Pasien</span></h5>
				</div>
				<div class="card">
					<div class="card-body">
						@foreach($pasiens as $p)

						<form method="post" action="/pasien/update">
							{{ csrf_field() }}

							<div class="form-group">
								<input type="hidden" name="id" value="{{ $p->id }}">
								<br />
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" value="{{ $p->nama }}">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" value="{{ $p->alamat }}">
							</div>
							<button type="submit" class="btn btn-primary" name="submit">Ganti</button>
							<a type="button" href="/0098pasien" class="btn btn-white" name="kembali">Kembali</a>
						</form>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</main>