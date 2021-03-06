<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $fillable = ['nama', 'tempatLahir', 'tanggalLahir', 'alamat', 'jenisKelamin','jenisProgram', 'kelas'];

    public function mataPelajarans(){
        return $this->hasMany(MataPelajaran::class);
    }
}
