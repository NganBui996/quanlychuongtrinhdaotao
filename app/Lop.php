<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    
    protected $fillable = [
        'tenlop','ma_sv', 'ma_gv'
    ];
    public $timestamps =false;

    
    protected $primaryKey = 'lop_id';
}
