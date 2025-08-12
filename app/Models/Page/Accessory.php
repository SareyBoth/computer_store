<?php

namespace App\Models\Page;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    public $timestamps = false;  

    protected $table = 'accessory';

    protected $fillable = [
        'name',          
        'price',
        'brand',
        'image',
        'description',
    ];
}
