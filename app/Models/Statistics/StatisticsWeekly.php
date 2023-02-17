<?php

namespace App\Models\Statistics;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class StatisticsWeekly extends Model
{
    protected $table = 'statistics_weekly';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_count',
        'most_requested_services',
        'type',
        'ssip_id',
        'user_id',
        'start_date',
        'end_date'        
    ];

    public function setMostRequestedServicesAttribute($value)
    {
        // Default to empty array of not set
        if(empty($value)) {
            $value = [];
        }

        $this->attributes['most_requested_services'] = json_encode($value);
    }

    public function getMostRequestedServicesAttribute($value)
    {
        return json_decode($value);
    }
}