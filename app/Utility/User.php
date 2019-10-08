<?php

namespace App\Utility;

use App\Models\Subscribe;
use App\User as UserModel;
use Carbon\Carbon;

class User
{

    public static function is_user_subscribed(int $user_id = null): bool
    {
        $user = UserModel::find($user_id);
        if (!$user) {
            return false;
        }
        $user_subscribe = $user->currentSubscribe()->first();
//        $user_s = Subscribe::where('subscribe_user_id',$user_id)->where('subscribe_expired_at','>=',Carbon::now());
        return !empty($user_subscribe);
    }

}