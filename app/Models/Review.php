<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Review extends Model
{
    protected $table = 'reviews';
    public $guarded = [];

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
