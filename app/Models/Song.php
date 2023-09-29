<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Album;

class Song extends Model
{
    use HasFactory;

    public function album() : BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}
