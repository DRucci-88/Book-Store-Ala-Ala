<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(string[] $array)
 */
class Book extends Model
{
    use HasFactory;

    //    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function scopeFilter($query, $search)
    {
        $query->when($search ?? false, function ($query, $search) {
            $keyword = '%' . $search . '%';
            return $query->where('name', 'LIKE', $keyword);
        });
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
