<?php


namespace App\Utility;


use App\Models\subscribe;

class File
{
    public static function user_can_download(int $user_id)
    {
        if (!User::is_user_subscribed($user_id)) {
            return false;
        }
        $userItem = \App\User::find($user_id);
        $user_subscribe = $userItem->currentSubscribe()->first();
        if (!$user_subscribe) {
            return false;
        }
        if ($user_subscribe->subscribe_download_count == $user_subscribe->subscribe_download_limit) {
            return false;
        }
        return true;
    }
}