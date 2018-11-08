<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = ['nama','asal','tujuan','waktu','jumlahpenumpang'];
}
