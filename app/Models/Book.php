<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * Get all of the puchases that belong to the book.
     */
    public function purchases()
    {
        return $this->belongsToMany(User::class, 'book_purchases')
                    ->using(BookPurchase::class);
    }
}
