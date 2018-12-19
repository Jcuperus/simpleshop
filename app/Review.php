<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['author', 'message', 'rating'];

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
