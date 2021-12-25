<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'status', 'attachment', 'price', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function likes()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function isLiked()
    {
        if(Auth::check()) {
            return Auth::user()->likes->contains('id', $this->id);
        }
    }

    public function proposals()
    {
        return $this->hasMany('App\Models\Proposal');
    }
}
