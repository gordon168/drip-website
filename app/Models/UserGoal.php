<?php
/**
 * @author: Jason.z
 * @email: ccnuzxg@163.com
 * @website: http://www.jason-z.com
 * @version: 1.0
 * @date: 2018/2/24
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class UserGoal extends Model
{
    use SoftDeletes;

    /**
     * 需要被转换成日期的属性。
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'desc',
        'expect_days',
        'date_type',
        'start_date',
        'end_date',
        'is_remind',
        'remind_time',
        'remind_sound',
        'remind_vibration',
        'is_public',
        'weekday',
        'checkin_model',
        'max_daily_count',
        'time_type',
        'start_time',
        'end_time',
        'order',
        'status'
    ];

    /**
     * 获取用户对象
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}