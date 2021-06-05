
@extends('0098layout')

@section('content')

<main role="main" class="flex-shrink0">
 		<div class="container">
 			<div class="row justify-content-center mt-5">
 				<div class="col-md-4">
 					<div class="card-header bg-transparent mb-0"><h5 class="text-center">Tambah <span class="font-weight-bold text-primary">Pasien</span></h5></div> 
 					<div class="card">
 						<div class="card-body">

        <div class="pull-right">
            <a class="btn btn-primary" href="0098index">Back</a>
        </div>
    </div>
</div>


<form action="/pasien/store/" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong>Alamat</strong>
                <input type="text" name="alamat" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</main>

@endsection