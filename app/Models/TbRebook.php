<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbRebook extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tb_rebook';

    protected $fillable = [
        'id_room',
        'nama_rebook',
        'no_hp_rebook',
        'waktu_mulai',
        'waktu_berakhir',
    ];
}
