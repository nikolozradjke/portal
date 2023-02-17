<?php

namespace App\Models\Statistics;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class StatisticsMobile extends Model
{
    protected $table = 'statistics_mobile';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'incoming_calls_count',
        'answered_calls_count',
        'missed_calls_count',
        'answered_calls_under_20_count',
        'online_chat_customer_count',
        'ssip_id',
        'user_id',
        'date'
    ];
}