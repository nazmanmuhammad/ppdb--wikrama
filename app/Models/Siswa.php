<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "siswa";
    protected $fillable = ['nis','nama_lengkap','jenis_kelamin','tempat_lahir','tanggal_lahir','alamat','asal_sekolah','kelas','jurusan'];
}
