<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'user_id',
        'studio_id',
        'no_telpon',
        'tanggal',
        'durasi',
        'start',
        'finish',
        'bukti_pembayaran',
        'status',
    ];

    public function user(){
        return $this->belongsTo(user::class);
    }
    
    public function studio(){
        return $this->belongsTo(studio::class);
    }

}
