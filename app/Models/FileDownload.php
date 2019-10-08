<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileDownload extends Model
{
    protected $table = 'file_downloads';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $dates = [
        'download_date'
    ];
    public $timestamps = false;
}
