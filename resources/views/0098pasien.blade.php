@extends('0098layout')
@section('content')

<div>
    <main role="main" class="flex-shrink0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Pasien</h1>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center" scope="col">Nama Pasien</th>
                                            <th class="text-center" scope="col">Alamat</th>
                                            <th class="text-center" scope="col">Opsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- kode_buku kode_kategori kode_penerbit judul_buku jumlah_buku pengarang_buku tahun_terbit_buku -->
                                        @foreach($pasien as $p)
                                        <tr>
                                            <td class="text-center">{{$p->nama}}</td>
                                            <td class="text-center">{{$p->alamat}}</td>
                                            <td class="text-center">
                                                <a href="/pasien/edit/{{ $p->id }}">Edit</a>
                                                <a href="/pasien/hapus/{{ $p->id}}">Hapus</a>
                                            </td>

                                            @endforeach
                                        </tr>

                                        <a href="0098index">Back</a>
                                        <div>
                                            <a href="0098tambah">Tambah</a>
                                        </div>
                                        <br>
                                        <div>
                                            Filter:
                                        </div>
                                        <a href="0098all2">All</a>
                                        <a href="0098filter3"> Surabaya</a>
                                        <a href="0098filter4"> Sidoarjo</a>

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