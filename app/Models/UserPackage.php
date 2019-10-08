<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{
    protected $table = 'user_packages';
    protected $primaryKey =['user_package_id'];
    protected $guarded = ['user_package_id'];

}
