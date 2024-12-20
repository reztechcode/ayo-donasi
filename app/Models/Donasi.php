<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Donasi extends Model
{
    protected $table = 'donations';

    protected $primaryKey = 'donation_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'campaign_id',
        'amount',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();

        // Set UUID secara otomatis saat create
        static::creating(function ($model) {
            if (empty($model->donation_id)) {
                $model->donation_id = (string) Str::uuid();
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function campaign(): BelongsTo
    {
        return $this->belongsTo(Campaign::class, 'campaign_id', 'campaign_id');
    }
}
