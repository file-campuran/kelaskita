<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Models\MasterKelas;
use App\Models\MasterJurusan;
use App\Models\MasterMapel;
use App\Models\MasterJadwalPelajaran;
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

    public function getDataMapel(Request $request)
	{
		$draw   = $request->get('draw');
		$start  = $request->get('start');
		$length = $request->get('length');
		$search = $request->input('search.value');

		$count  = MasterJadwalPelajaran::count();
		$data   = MasterJadwalPelajaran::get();

		$data = array(
			'draw'              => $draw,
			'recordsTotal'      => $count,
			'recordsFiltered'   => $count,
			'data'              => $data
		);
        echo json_encode($data);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
