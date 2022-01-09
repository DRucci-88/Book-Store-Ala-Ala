<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @method static where()
 */
class BookGenre extends Pivot
{
    use HasFactory;

    public $timestamps  = false;
}
