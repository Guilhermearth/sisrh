<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class, 'id_user');
    }

    public function departamento()
    {
        return $this->belongsTo(departamento::class, 'id_departamento');
    }
    
    public function cargo()
    {
        return $this->belongsTo(cargo::class, 'id_cargo');
    }
}
