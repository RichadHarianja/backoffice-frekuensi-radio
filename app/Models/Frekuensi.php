<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frekuensi extends Model
{
    use HasFactory;

    protected $table = 'f_radio';
    protected $fillable = [
    	'frekuensi',
    	'bandwith',
    	'type',
    	'service',
    	'power',
    	'location',
    	'status',
    	'type_code',
		'divisi_code',
    ];
}
