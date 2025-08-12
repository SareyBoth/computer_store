<?php

namespace App\Models\Page;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;  // Disable timestamp columns

    protected $table = 'location';

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'city',
        'link',
    ];
}
