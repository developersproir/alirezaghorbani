<?php

namespace App\Models;

use App\Traits\Categorizable;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use Categorizable;
   protected $table = 'files';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public function packages()
    {
        return $this->belongsToMany(Package::class,'package_file','file_id','package_id');
    }
    public function getFileTypeTextAttribute()
    {
        $types = [
            'application/pdf' => 'PDF',
            'image/png' => 'PNG',
        ];
        return $types[$this->attributes['file_type']];
    }

    public function scopepopular($query){
        return $query->orderBy('file_download_count','desc');
    }
    public function updateDownloadCounts() {
        $isDownloadExistForToday = FileDownload::where('file_id',$this->file_id)->whereDate('download_date',Carbon::today())->first();
        if($isDownloadExistForToday && $isDownloadExistForToday instanceof FileDownload)
        {
            $isDownloadExistForToday->increment('download_count');
        }else{
            FileDownload::create([
                'file_id' => $this->file_id,
                'download_count' => 1,
                'download_date' => Carbon::now()
            ]);
        }

    }

}
