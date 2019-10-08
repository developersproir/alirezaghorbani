<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class subscribe extends Model
{
    protected $table = 'bir_subscribers';
    protected $primaryKey ='bir_subscribe_id';
    protected $guarded = ['bir_subscribe_id'];
    public $timestamps = false;
    protected $dates =[
      'bir_subscribe_create_at',
      'bir_subscribe_payment_expied_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'bir_subscribe_user_id');
    }

    public function plan()
    {
        return $this->belongsTo(plan::class,'bir_subscribe_plan_id');
    }
}
