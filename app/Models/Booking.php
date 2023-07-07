<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'no_telepon',
        'paket',
        'tanggal_booking',
        'waktu_booking',
        'bukti_pembayaran',
    ];

    protected $table = 'bookings';
    protected $guarded = ['id'];

    public function getCreatedAtAttribute()
{
    return \Carbon\Carbon::parse($this->attributes['tanggal_booking'])
       ->format('d, M Y');
}
}
