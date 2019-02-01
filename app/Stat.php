<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $fillable = [
        'id', 'user_id'
    ];


    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
