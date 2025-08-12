<?php

namespace App\Models\Page;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public $timestamps = false;
    
    protected $table = 'laptop';

    protected $fillable = [
        'name',
        'price',
        'brand',
        'image',
        'cpu',
        'ram',
        'storage',
        'graphic',
        'display',
        'os',
        'battery',
        'weight',
        'warranty',
        'upgrade',
    ];
}
