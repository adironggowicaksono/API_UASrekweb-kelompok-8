<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UasRekweb extends Model
{
    protected $table = 'table_uasrekweb';
    protected $fillable = ['NoPendaftaran','Nisn', 'NamaLengkap', 'JenisKelamin','Kewarganegaraan', 'Agama', 'GolonganDarah', 'NoTelepon', 'Email', 'Alamat', 'TempatLahir', 'TanggalLahir', 'AsalSekolah', 'ProgramStudi'];
}