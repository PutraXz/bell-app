<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hours extends Model
{
    public function days(){
        return $this->hasMany(Days::class);

    }
    use HasFactory;
    protected $guarded = [];
}
