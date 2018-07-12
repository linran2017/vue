<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model{
    protected $guarded=[];

    /**
     * 一个课程关联多个视频，一对多关联
     */
    public function videos(){
        return $this->hasMany(Video::class);
    }
}
