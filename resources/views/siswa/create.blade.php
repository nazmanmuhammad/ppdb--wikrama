@extends('layouts.master')

@section('content')
	<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Tambah Peserta Didik Baru</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('siswa.store') }}" method="post" class="form-horizontal">
                                        	@csrf
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">NIS</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="nis" name="nis" placeholder="NIS" class="form-control @error('nis') is-invalid @enderror" value="{{old('nis')}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Nama Lengkap</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{old('nama_lengkap')}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                <div class="col col-md-9 @error('jenis_kelamin') is-invalid @enderror">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label">
                                                            <input type="radio" id="inline-radio1" name="jenis_kelamin" value="laki-laki" class="form-check-input">Laki-laki
                                                        </label>&nbsp;
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" name="jenis_kelamin" value="perempuan" class="form-check-input">Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Tempat Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{old('tempat_lahir')}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{old('tanggal_lahir')}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input id="alamat" name="alamat" placeholder="Masukan Alamat..." class="form-control @error('alamat') is-invalid @enderror" value="{{old('alamat')}}"></input>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Asal Sekolah</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="Masukan Asal Sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" value="{{old('asal_sekolah')}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" >
                                                        <option readonly>-- Pilih Kelas --</option>
                                                        <option value="X">Kelas X</option>
                                                        <option value="XI">Kelas XI</option>
                                                        <option value="XII">Kelas XII</option>
                                                    </select>
                                                </div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label @error('jurusan') is-invalid @enderror">Jurusan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="jurusan" id="jurusan" class="form-control">
                                                        <option readonly>-- Pilih Jurusan --</option>
                                                        <option value="RPL">RPL</option>
                                                        <option value="TKJ">TKJ</option>
                                                        <option value="MMD">MMD</option>
                                                    </select>
                                                </div>
                                            </div>
		                                        <button type="submit" class="btn btn-primary btn-sm" style="float:right;">
		                                            <i class="fa fa-dot-circle-o"></i> Submit
		                                        </button>&nbsp;
		                                        <button type="reset" class="btn btn-danger btn-sm" style="float:right;">
		                                            <i class="fa fa-ban"></i> Reset
		                                        </button>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
@endsection