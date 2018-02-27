<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function items()
    {
        return $this->belongsToMany('App\Item','checkin_item','checkin_id','item_id')->withPivot('item_value');
    }

    // 获取附件
    public function attaches()
    {
        return $this->morphMany('App\Models\Attach', 'attachable');
    }
}
