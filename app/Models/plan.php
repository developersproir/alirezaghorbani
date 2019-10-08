<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    protected $table = 'bir_plan';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function subscribes()
    {
        return $this->hasMany(subscribe::class,'bir_subscribe_plan_id');
    }
}
