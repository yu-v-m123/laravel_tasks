<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'registration_date',
        'expiration_date',
        'completion_date'
    ];

    /**
     * 
     * リレーション
     * 
     */

    public function user() {
        return $this->belongsTo('App\User');
    }
}
