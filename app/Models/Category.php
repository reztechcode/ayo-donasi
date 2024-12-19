<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    // Menentukan primary key sebagai 'category_id'
    protected $primaryKey = 'category_id';
    public $incrementing = false; // Karena kita menggunakan UUID
    protected $keyType = 'string'; // UUID adalah tipe string
    protected $table = 'categories';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'icon',
    ];

    /**
     * Relasi One-to-Many: Kategori memiliki banyak Campaigns
     */
    // public function campaigns()
    // {
    //     return $this->hasMany(Campaign::class, 'category_id', 'category_id');
    // }

    protected static function boot()
    {
        parent::boot();

        // Set UUID secara otomatis saat create
        static::creating(function ($model) {
            if (empty($model->category_id)) {
                $model->category_id = (string) Str::uuid();
            }
        });
    }
}
