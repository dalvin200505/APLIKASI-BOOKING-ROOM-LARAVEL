<?php

namespace App\Models;   

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class TbUsers extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tb_users';

    protected $fillable = [
        'nama_lengkap',
        'username',
        'password',
    ];
}
