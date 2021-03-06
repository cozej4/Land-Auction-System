<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserDetail;
use App\Area;
use App\AreaType;
use App\Block;
use App\Plot;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
    	$total_areas = Area::count();
    	$total_land_uses = AreaType::count();
    	$total_blocks = Block::count();
    	$total_plots = Plot::count();
    	$all_plots = DB::table('all_plots_status_report_view')
    					->select('areaname', DB::raw('COUNT(*) as total_plots'))
    					->groupBy('areaname')
    					->get();

        $today_total_reservations = DB::table('reserved_plots_status_view')
                                        ->where('created_at', '>=', Carbon::today())
                                        ->count();
        $yesterday_total_reservations = DB::table('reserved_plots_status_view')
                                        ->where('created_at', '>=', Carbon::today()->subDay())
                                        ->where('created_at', '<=', Carbon::today())
                                        ->count();
        $this_week_total_reservations = DB::table('reserved_plots_status_view')
                                        ->where('created_at', '>=', Carbon::today()->subWeek())
                                        ->where('created_at', '<=', Carbon::now())
                                        ->count(); 
        $this_month_total_reservations = DB::table('reserved_plots_status_view')
                                        ->where('created_at', '>=', Carbon::today()->subWeeks(4))
                                        ->where('created_at', '<=', Carbon::now())
                                        ->count();                                                                                                                                                                      

        $user = UserDetail::findOrFail(Session::get('id'));
        return view('admin.dashboard.index', compact('user', 'total_areas', 'total_land_uses', 'total_blocks', 'total_plots', 'all_plots', 'today_total_reservations', 'yesterday_total_reservations', 'this_week_total_reservations', 'this_month_total_reservations'));
    }
}
