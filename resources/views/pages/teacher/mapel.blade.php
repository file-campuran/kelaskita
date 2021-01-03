@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Teacher</a></li>
    <li class="breadcrumb-item active" aria-current="page">Mata Pelajarn</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Mata Pelajaran</h6>
        <p class="card-description">

        </p>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>Nama Kelas</th>
                <th>Guru</th>
                <th>Jenjang</th>
                <th>Kelas</th>
                <th>Mata Pelajaran</th>
                <th>KKM</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>IPS X-Ips-1_MIPA Biologi</td>
                <td>Erni Wiyanti, S.Pd., M.M.</td>
                <td>Kelas X	</td>
                <td>IPS X-IPS-1	</td>
                <td>MIPA Biologi	</td>
                <td>75</td>
                <td>
                  <button type="button" class="btn btn-danger btn-icon">
                    <i data-feather="trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>MIPA X-MIPA-1_MIPA Fisika	</td>
                <td>Erni Wiyanti, S.Pd., M.M.</td>
                <td>Kelas X	</td>
                <td>MIPA X-MIPA-1	</td>
                <td>MIPA Fisika	</td>
                <td>75</td>
                <td>
                  <button type="button" class="btn btn-danger btn-icon">
                    <i data-feather="trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>MIPA X-MIPA-2_MIPA Fisika	</td>
                <td>Erni Wiyanti, S.Pd., M.M.</td>
                <td>Kelas X	</td>
                <td>MIPA X-MIPA-2	</td>
                <td>MIPA Fisika	</td>
                <td>75</td>
                <td>
                  <button type="button" class="btn btn-danger btn-icon">
                    <i data-feather="trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush