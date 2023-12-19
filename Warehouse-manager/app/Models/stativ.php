<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stativ extends Model
{
    use HasFactory;

    
public function itmes(): HasMany
{
    return $this->hasMany(item::class);
}

protected $fillable = [
    'name',
    'rows',
    'columns',
    'measurementSize'
];
}
