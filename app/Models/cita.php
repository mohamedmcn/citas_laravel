<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    protected $fillable= ['autor','usuario_id','cita'];
    use HasFactory;
}
