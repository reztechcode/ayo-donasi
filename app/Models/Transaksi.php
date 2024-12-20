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

    protected $fillable = [ 'transaction_id', 'donation_id', 'midtrans_order_id',
                            'gross_amount', 'status', 'snap_token'
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
    public function donasi()
    {
        return $this->belongsTo(Donasi::class, 'donasi_id', 'donasi_id');
    }

    // Relasi ke User
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }
}
