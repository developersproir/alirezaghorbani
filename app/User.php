<?php

namespace App;

use App\Models\Package;
use App\Models\Payment;
use App\Models\subscribe;
use App\Models\UserPackage;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const USER = 1;
    const ADMIN = 2;
    use Notifiable;

   protected $table = 'users';
    protected $guarded = ['bir_role'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class,'payment_user_id');
    }

    public function subscribes()
    {
        return$this->hasMany(subscribe::class,'bir_subscribe_user_id');
    }

    public function currentSubscribe()
    {
        return $this->subscribes()->where('bir_subscribe_payment_expied_date', '>=', Carbon::now());
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class,'user_packages','user_id','package_id')->withPivot(['amount','created_at']);
    }
}
