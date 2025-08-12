<?php

namespace App\Models\Dashboard;
use Illuminate\Database\Eloquent\Model;

class PCHardware extends Model
{
    public $timestamps = false;
    
    protected $table = 'pc_hardware';

    protected $fillable = [
        'name',
        'price',
        'type',
        'image',
        'description',
    ];
}
