<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $id = 'area_id';

    protected $fillable = [
        'nombre',
        'descripcion',
        'usuarios_permitidos'
    ];
}
