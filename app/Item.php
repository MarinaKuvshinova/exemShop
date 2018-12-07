<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'items';
    protected $fillable = [
        'title',
        'itemTitle',
        'categoryId',
        'itemText',
        'itemPrice',
        'itemPrice',
        'itemHot',
        'itemHot',
        'itemSale',
        'itemImagePath',
        'imagePath',
        'create_at',
        'update_at',
    ];
}
