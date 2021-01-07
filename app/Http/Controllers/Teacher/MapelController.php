<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Models\MasterKelas;
use App\Models\MasterJurusan;
use DB;
class MapelController extends BaseController
{
    public function mapelGet(Request $request){
        return view('pages.teacher.mapel');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
