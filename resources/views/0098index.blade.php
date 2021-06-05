@extends('0098layout')
@section('content')

<div>
    <main role="main" class="flex-shrink0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Join</h1>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center" scope="col">Nama Pasien</th>
                                            <th class="text-center" scope="col">Alamat</th>
                                            <th class="text-center" scope="col">Dokter</th>
                                            <th class="text-center" scope="col">Jabatan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- kode_buku kode_kategori kode_penerbit judul_buku jumlah_buku pengarang_buku tahun_terbit_buku -->
                                        @foreach($kamar as $p)
                                        <tr>
                                            <td class="text-center">{{$p->nama}}</td>
                                            <td class="text-center">{{$p->alamat}}</td>
                                            <td class="text-center">{{$p->namad}}</td>
                                            <td class="text-center">{{$p->jabatan}}</td>
                                            @endforeach
                                            <div>
                                                <a href="0098pasien">Tabel Pasien</a>
                                            </div>
                                            <br>
                                            <div>
                                                Filter:
                                            </div>
                                            <a href="0098all1">All</a>
                                            <a href="0098filter"> Surabaya</a>
                                            <a href="0098filter2"> Sidoarjo</a>


                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>


    <ul>

    </ul>

</div>
@stop