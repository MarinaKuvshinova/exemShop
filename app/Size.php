<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'sizes';
    protected $fillable = [
        'sizeName'
    ];
}
