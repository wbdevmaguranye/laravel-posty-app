<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        // 'user_id',
    ];
    public function likedBy( User $user){
        // contains is a laravel collection method here im to chech if a usrr has already like the comment
return $this->likes->contains('user_id', $user->id);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
}
