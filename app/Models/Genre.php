<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;

//    protected $primaryKey = 'id';

    public function Books(): BelongsToMany
    {
        return $this->BelongsToMany(Book::class, 'book_genre');
    }
}
