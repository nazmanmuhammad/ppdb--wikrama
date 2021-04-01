@extends('layouts.master')
@section('content')
 <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Penerimaan Peserta Didik</h2>
                                    <a href="{{ route('siswa.create') }}" class="au-btn au-btn-icon au-btn--blue"><i class="zmdi zmdi-plus"></i>add item</button></a>
                                </div>
                            </div>
                        </div>
                        <br>
	<div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NIS</th>
                                                <th>Nama Lengkap</th>
                                                <th class="text-right">Jenis Kelamin</th>
                                                <th class="text-right">Tempat Lahir</th>
                                                <th class="text-right">Tanggal Lahir</th>
                                                <th class="text-right">Alamat</th>
                                                <th class="text-right">Asal Sekolah</th>
                                                <th class="text-right">Kelas</th>
                                                <th class="text-right">Jurusan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; ?>
                                        	@if(count($siswa)>0)
                                            <tr>
                                            	@foreach($siswa as $s)
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $s->nis }}</td>
                                                <td>{{ $s->nama_lengkap }}</td>
                                                <td>{{ $s->jenis_kelamin }}</td>
                                                <td class="text-right">{{ $s->tempat_lahir }}</td>
                                                <td class="text-right">{{ $s->tanggal_lahir }}</td>
                                                <td class="text-right">{{ $s->alamat }}</td>
                                                <td class="text-right">{{ $s->asal_sekolah }}</td>
                                                <td class="text-right">{{ $s->kelas }}</td>
                                                <td class="text-right">{{ $s->jurusan }}</td>
                                                <td><a href="{{ route('siswa.edit',[$s->id])}}" class="btn btn-warning">Ubah</a>
                                                    <a href="">
                                                        <form action="{{ route('siswa.destroy',[$s->id]) }}" method="post">
                                                            {{csrf_field()}}
                                                            {{ method_field('DELETE') }}
                                                            <button class="btn btn-danger">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                    </a></td>
                                            </tr>
                                            @endforeach
                                            @else
                                            	<td>Data Kosong</td>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                                </div>
                            </div>
                        </div>
@endsection