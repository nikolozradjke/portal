<?php

namespace App\Repositories;

use App\Models\Permission;
use Illuminate\Support\Str;

use App\Models\Statistics\StatisticsWeekly;
use App\Models\Statistics\StatisticsDaily;
use App\Models\Statistics\StatisticsMobile;

class StatisticsRepository 
{
    public $menu = 'statistics';

    public function __construct() 
    {
        Permission::checkOrFail($this->menu);
    }

    public function getStatistics($type)
    {
        $statisticsFunction = 'getStatistics'.Str::ucfirst($type);

        if(method_exists($this, $statisticsFunction)) {

            return $this->$statisticsFunction();            
        }
    }

    public function getStatisticsWeekly()
    {
        return StatisticsWeekly::get();
    }

    public function getStatisticsDaily()
    {
        return StatisticsDaily::get();
    }

    public function getStatisticsMobile()
    {
        return StatisticsMobile::get();
    }
}