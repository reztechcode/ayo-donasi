<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Campaign extends Model
{
    use HasFactory;

    protected $primaryKey = 'campaign_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'slug',
        'title',
        'description',
        'category_id',
        'target_amount',
        'collected_amount',
        'start_date',
        'end_date',
        'image_path',
        'status',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    /**
     * Boot method untuk model.
     */
    protected static function boot()
    {
        parent::boot();

        // Set UUID dan slug otomatis saat create
        static::creating(function ($model) {
            if (empty($model->campaign_id)) {
                $model->campaign_id = (string) Str::uuid();
            }

            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title) . '-' . Str::random(4);
            }
        });

        // Update slug jika title diubah
        static::updating(function ($model) {
            if ($model->isDirty('title')) {
                $model->slug = Str::slug($model->title) . '-' . Str::random(4);
            }
        });
    }

    /**
     * Relasi Many-to-One: Campaigns ke Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    /**
     * Relasi One-to-Many: Campaigns ke Donations.
     */
    // public function donations()
    // {
    //     return $this->hasMany(Donation::class, 'campaign_id', 'campaign_id');
    // }
}
