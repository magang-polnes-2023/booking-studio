<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studio extends Model
{
    use HasFactory;
    protected $table ='studio';
    protected $fillable = [
        'image',
        'nama_studio',
        'harga',
        'deskripsi',
    ];
    
    public function booking(){
        return $this->hasMany(booking::class);
    }
}
