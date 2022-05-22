<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Reply extends Model
{
    
    protected $guarded = [];
    	
    public function question()
    {
    	return $this->belongsTo(Question::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
 
    public function likes()
    {
    	return $this->hasMany(Like::class);
    }

}
