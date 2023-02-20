<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'content',
      'image_path',
      'status',
      'author_id',
      'category_id'
    ];

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id')->first();
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id')->first();
    }

    public function getImageUrlAttribute()
    {
        return asset('public' . Storage::url($this->image_path));
    }

    public function getUserHasActionsAttribute()
    {
        return Auth::user()->id === $this->author_id || Auth::user()->role === 'admin';
    }
}
