<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;

    public function stativ(): BelongsTo
    {
        return $this->belongsTo(Stativ::class);
    }

    protected $fillable = [
        'name',
        'dimension',
        'length',
        'ID/OD',
        'stativ_id',
        'inner_outer',
    ];
}
