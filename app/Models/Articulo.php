<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Articulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'price',
        'img_path',
    ];

    /**
     * Get the user that owns the Articulo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeSearchTitle($query, $title){
        if($title){
            return $query->where('title', 'ilike', "%{$title}%");
            //return $query->where('title', 'ilike', "%".$value."%")
        }
    }

    public function scopeSearchUser($query, $user_id){
        if($user_id){
            return $query->where('user_id', 'ilike', "%{$user_id}%");
        }
    }
}