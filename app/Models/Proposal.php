<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable =['job_id','user_id','is_verified'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function coverLetter()
    {
        return $this->hasOne('App\Models\CoverLetter');
    }
    
    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }
}
