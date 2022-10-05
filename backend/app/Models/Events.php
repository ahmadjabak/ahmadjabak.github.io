<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    public $timestamps = false;

    

    protected $fillable =[

    'EvTitle',
    'EvImage',
 
    'EvDescription',
    'EvLocation',
    'EvLink',
    'EvAddress',
    'EvEventdate'

];

protected $primaryKey = 'EvId';
}
