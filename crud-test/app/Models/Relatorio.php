<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    use HasFactory;

    protected $table = 'relatorio';

    protected $guarded = ['id'];

    protected $fillable = [
        'SKU',
        'nome',
        'quantidade',
        'tipo',
        'sistema'
    ];
}
