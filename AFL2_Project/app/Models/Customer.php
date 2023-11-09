<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ["customer_name", "profile_picture"];
    public function testimonies(): HasMany
    {
        return $this->hasMany(Testimony::class);
    }
}
