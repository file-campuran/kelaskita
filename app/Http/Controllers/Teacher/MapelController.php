<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Models\MasterKelas;
use App\Models\MasterJurusan;
use App\Models\MasterMapel;
use DB;
class MapelController extends BaseController
{
    public function mapelGet(){
        $params = [
            'showKelas'     => MasterKelas::get(),
            'showJurusan'   => MasterJurusan::get(),
            'showMapel'     => MasterMapel::get(),
        ];
        return view('pages.teacher.mapel')->with($params);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
