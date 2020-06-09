<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function plant() {
        return $this->belongsTo(Plant::class);
    }

}
