<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History2 extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'news_id' => 'repuired',
        'edited_at' => 'required',
        );
}
