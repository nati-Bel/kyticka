<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Photo extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];

    public function gallery(): BelongsTo {
        return $this->belongsTo(Gallery::class);
    }
}
