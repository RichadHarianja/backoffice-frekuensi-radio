<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Divisi;

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
		'unit',
    	'status',
    	'type_code',
		'divisi_code',
    ];

	public function divisi(): BelongsTo
	{
		return $this->belongsTo(Divisi::class, "divisi_code", "divisi_id");
	}

	

	
}
