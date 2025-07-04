<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    protected $table = 'login';
    protected $primaryKey = 'id_login';
    public $timestamps = false;

    protected $fillable = ['username', 'password'];
}
