<?php

namespace App\Models\Page;
use Illuminate\Database\Eloquent\Model;

class PCSet extends Model
{
    public $timestamps = false;

    protected $table = 'pc_set';

    protected $fillable = [
        'name',
        'price',
        'brand',
        'image',
        'description',
    ];
}
