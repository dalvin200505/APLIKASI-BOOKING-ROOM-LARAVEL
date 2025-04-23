<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbRoom extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tb_room';

    protected $fillable = [
        'nm_room',
        'lokasi',
        'foto_room',
    ];
}
