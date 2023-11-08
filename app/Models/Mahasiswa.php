<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    //jika nama table berbeda
    protected $table = "mahasiswa";

    //untuk mengatur kolom yang boleh di isi saat mass assignment
    protected $fillable = ['npm', 'nama'];

    //dipakai untuk mengatur kolom yang tidak boleh di isi
    protected $guarded = [];

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi');
    }

}
