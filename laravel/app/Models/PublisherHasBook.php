<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PublisherHasBook extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'publisher_id'];
    public function publisher(): HasMany
    {
        return $this->hasMany(Publisher::class);
    }
    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}