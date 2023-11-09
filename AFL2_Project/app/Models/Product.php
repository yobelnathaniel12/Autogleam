<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ["product_name", "description", "price"];
    public function testimonies(): HasMany
    {
        return $this->hasMany(Testimony::class);
    }
}
