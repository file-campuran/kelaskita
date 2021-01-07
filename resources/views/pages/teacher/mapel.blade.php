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
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Mata Pelajaran</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Tambah Data</button>
          </div>
        </div>
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

<div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas Belajar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name">Pilih Kelas:</label>
            <select name="kelas" class="form-control form-control-sm mb-3">
              <option selected>Open this select menu</option>
              @foreach($showKelas as $value)
              <option value="{{ $value->id }}">{{ $value->kelas }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text">Pilih Jurusan:</label>
            <select name="jurusan" class="form-control form-control-sm mb-3">
              <option selected>Open this select menu</option>
              @foreach($showJurusan as $value)
              <option value="{{ $value->id }}">{{ $value->jurusan }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text">Pilih Mata Pelajaran:</label>
            <select name="mata_pelajaran" class="form-control form-control-sm mb-3">
              <option selected>Open this select menu</option>
              @foreach($showMapel as $value)
              <option value="{{ $value->id }}">{{ $value->nama_mapel }}</option>
              @endforeach
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="button" class="btn btn-success">Simpan</button>
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