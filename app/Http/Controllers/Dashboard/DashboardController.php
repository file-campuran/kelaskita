<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Dashboard;
use App\Models\Invoice;
use App\Models\User;
use App\Models\InvoiceBatch;
use App\Models\InvoiceProductClient;
use App\Models\Client;
use App\Models\Product;
use App\Models\StaffTracking;
use App\Models\WorkOrder;
use App\Estimates;
use App\Models\Staff;
use App\Models\LogActivity;
use App\Charts\TrafficChart;
use DB;
class DashboardController extends BaseController
{
    public function dataGet(Request $request){
        return view('pages.dashboard');
    }

    public function reg(){
        // dd('masuk_reg');
        $params = [
            'user'      => 'admin@admin.com',
            'pass'      => 'admin',
            'role_id'   => 1,
        ];
        Auth::register($params);
        return 'ok';
        // return view('pages/dashboard');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
