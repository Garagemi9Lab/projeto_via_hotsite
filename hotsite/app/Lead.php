<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //
    public $table = 'leeds';

    public $fillable = ['name', 'email', 'empresa', 'celular'];
}
