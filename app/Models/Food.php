<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public function scopeSearch(Builder $query, $params)
    {
        if (!empty($params['category'])) {
            $query->where('category', 'like', '%' . $params['category'] . '%');
        }
        return $query;
    }
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
}
