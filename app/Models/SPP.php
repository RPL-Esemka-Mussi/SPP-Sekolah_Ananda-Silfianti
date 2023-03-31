<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    use HasFactory;

    protected $table = 'spp';
    protected $fillable = [
        'tahun',
        'nominal',
    ];
    public function user()
    {
       return $this->hasMany( User::class);
    }

    public function kelas()
    {
      return  $this->belongsTo( Kelas::class);
    }
    public function pembayaran()
    {
      return  $this->hasMany( Pembayaran::class);
    }
}
