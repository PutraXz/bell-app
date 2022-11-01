<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    public function hours(){
        return $this->belongsTo(Hours::class);
    }
    use HasFactory;
    protected $table ='days';
    protected $primaryKey = 'id';
    protected $fillable = array('days','hours_id');
}
