<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class TeacherController extends BaseController
{
    public function mapelGet(Request $request){
        return view('pages.teacher.mapel');
    }

    public function materiGet(Request $request){
        return view('pages.teacher.materi');
    }

    public function absenGet(Request $request){
        return view('pages.teacher.absen');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
