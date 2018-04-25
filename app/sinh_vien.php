<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sinh_vien extends Model
{
    protected $fillable = [
        'username', 'email', 'password', 'sv_name', 'diachi_sv'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $primaryKey = 'sv_id';
}
