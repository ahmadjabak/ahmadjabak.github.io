<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admins;
use \Illuminate\Database\Eloquent\Relations\HasMany;
class Roles extends Model
{
    use HasFactory;
    public function admins()
    {
        return $this->hasMany('App\Models\Admins','RoId','RoId');
    }
}
