<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 

class UsuarioCrud extends Model
{

    protected $fillable =  ['id','nome', 'email', 'senha'];

     

    use HasFactory;
}
