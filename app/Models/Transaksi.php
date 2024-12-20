<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $primaryKey = 'transaction_id';
    public $incrementing = false; // UUID
    protected $keyType = 'string';
    protected $table = 'transactions';

    protected $fillable = [
        'transaction_id',
        'donation_id',
        'midtrans_order_id',
        'gross_amount',
        'status',
        'snap_token'
    ];

    protected static function boot()
    {
        parent::boot();

        // Set UUID secara otomatis saat create
        static::creating(function ($model) {
            if (empty($model->transaction_id)) {
                $model->transaction_id = (string) Str::uuid();
            }
        });
    }

    // Relasi ke Donasi
    public function donation()
    {
        return $this->belongsTo(Donasi::class, 'donation_id', 'donation_id');
    }
    // Relasi Berjenjang Ke Tabel User
    public function user()
    {
        return $this->hasOneThrough(
            User::class,
            Donasi::class,
            'donation_id',  // Foreign key di tabel donasi
            'user_id',         // Foreign key di tabel user
            'donation_id',  // Local key di tabel transaksi
            'user_id'     // Local key di tabel donasi
        );
    }
}
