<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaginaInicial extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $guarded = ['id'];

    // protected $fillable = [
    //     'quantidade',
    // ];
}
