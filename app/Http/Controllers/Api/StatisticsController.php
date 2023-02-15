<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\StatisticsRepository;

class StatisticsController extends Controller
{
    /**
     * @var StatisticsRepository
     */
    protected $statisticsRepository;   

    /**
     * @param StatisticsRepository $statisticsRepository
     */

    public function __construct(StatisticsRepository $statisticsRepository) 
    {
        $this->repository = $statisticsRepository;
    }

    public function get(Request $request){
        $type = $request->route('type');        
        
        return response()->json($this->repository->getStatistics($type), 200);
    }
}
