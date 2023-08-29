<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arabaİnsert extends Model
{

    use HasFactory;
    protected $table = 'arabalars';
    protected $fillable = ['marka', 'model','adi','sene','fiyat','renk','vites','km'];

}
