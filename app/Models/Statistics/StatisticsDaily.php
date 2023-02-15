<?php

namespace App\Models\Statistics;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class StatisticsDaily extends Model
{
    protected $table = 'statistics_daily';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_count',
        'wait_time_avg',
        'wait_time_max',
        'transaction_time',
        'ssip_id',
        'user_id',
        'date'
    ];
}