<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
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
