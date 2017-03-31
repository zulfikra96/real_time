<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatGroup extends Model
{
    protected $fillable = [
        'username','message','user_id','check','created_at'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
