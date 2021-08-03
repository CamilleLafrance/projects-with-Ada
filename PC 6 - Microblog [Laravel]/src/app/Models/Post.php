<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user()
{
    return $this->belongsTo(User::class);
}
    public function profile()
{
    return $this->hasOne(Profile::class);
}
protected $fillable = [
    'description',
    'img_url',
    'user_id',
];
}
