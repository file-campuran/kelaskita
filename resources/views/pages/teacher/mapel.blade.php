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
            <button type="button" class="btn btn-outline-danger" onclick="showSwal('passing-parameter-execute-cancel')">Hapus</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataMapel" class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Kelas</th>
                <th>Guru</th>
                <th>Jenjang</th>
                <th>Kelas</th>
                <th>Mata Pelajaran</th>
                <th>KKM</th>
              </tr>
            </thead>
            <tbody>
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

  <script>
    $(function() {
    var table = $('#dataMapel').DataTable({
        paging: true,
        processing: false,
        serverSide: false,
        select: true,
        ajax: function(data, callback){
            $.ajax({
                url: '{{ url('/')}}/matapelajaran/ajax',
                'data': {
                    ...data,
                },
                dataType: 'json',
                beforeSend: function(){
                // Here, manually add the loading message.
                $('#ContactList > tbody').html(
                    '<tr class="odd">' +
                    '<td valign="top" colspan="7" class="dataTables_empty"><i class="fa fa-spinner fa-spin fa-2x fa-fw"></i></td>' +
                    '</tr>'
                );
                },
                success: function(res){
                callback(res);
                }
            })
        },
        columns: [
            { data: null, mRender: function(data, type, full) {
                return `<input type="checkbox" class="checkbox" id="" value="${data.id}">`
            }},
            { data: 'nama_kelas', name: 'Nama Kelas' },
            { data: 'guru', name: 'Guru' },
            { data: 'jenjang', name: 'Jenjang'},
            { data: 'kelas', name: 'Kelas'},
            { data: 'mata_pelajaran', name: 'Mata Pelajaran'},
            { data: 'kkm', name: 'KKM'},               
        ],
        language: {
                loadingRecords: "&nbsp;",
                processing: 'Loading...'},
        })        
    });
</script>
@endpush