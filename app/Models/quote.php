<?php

namespace App\Models;

use Auth;
use App\User;
use Illuminate\Database\Eloquent\Model;

class quote extends Model
{
    protected $table = 'quotes';

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
