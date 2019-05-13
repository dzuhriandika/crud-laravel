<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $fillable = ['judul', 'tahun_terbit', 'penerbit','pengarang'];
    public $primaryKey='id';
    public $timestamp = true;
}
