<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function gender(){
        return $this->hasOne('App\Models\Gender', 'id', 'gender_id');
    }
}
