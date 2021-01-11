@extends('layout.master')

@section('content')
<div class="profile-page tx-13">
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="profile-header">
        <div class="cover">
          <div class="gray-shade"></div>
          <figure>
            <img src="{{ url('https://via.placeholder.com/1148x272') }}" class="img-fluid" alt="profile cover">
          </figure>
          <div class="cover-body d-flex justify-content-between align-items-center">
            <div>
              <img class="profile-pic" src="{{ url('https://via.placeholder.com/100x100') }}" alt="profile">
              <span class="profile-name">Amiah Burton</span>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-primary btn-icon-text btn-edit-profile">
                <i data-feather="eye" class="btn-icon-prepend"></i> Edit profile
              </button>
            </div>
          </div>
        </div>
        <div class="header-links">
          
        </div>
      </div>
    </div>
  </div>
  <div class="alert alert-primary " role="alert">
    <h4 class="alert-heading">Info!</h4>
    <p>Tahun Ajaran 2020/2021 - Semester Genap</p>
  </div>
  <div class="row profile-body">  
    <!-- middle wrapper start -->
    <div class="col-4">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card rounded">
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <div class="ml-2">
                    <p>IPS X-Ips-1_MIPA Biologi</p>
                    <p class="tx-11 text-muted">Mata Pelajaran IPS Biologi Kelas Kelas X</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <p class="mb-3 tx-14">36 Siswa | Max KD : 9 | KKM : 75</p>
            </div>
            <div class="card-footer">
              <div class="d-flex post-actions">
                <a href="/kelas" class="d-flex align-items-center text-muted">
                  <i class="icon-md" data-feather="inbox"></i>
                  <p class="d-none d-md-block ml-2">Masuk</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card rounded">
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <div class="ml-2">
                    <p>MIPA X-MIPA-1_MIPA Fisika	</p>
                    <p class="tx-11 text-muted">Mata Pelajaran MIPA Fisika Kelas Kelas X</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <p class="mb-3 tx-14">36 Siswa | Max KD : 9 | KKM : 75</p>
            </div>
            <div class="card-footer">
              <div class="d-flex post-actions">
                <a href="javascript:;" class="d-flex align-items-center text-muted">
                  <i class="icon-md" data-feather="inbox"></i>
                  <p class="d-none d-md-block ml-2">Masuk</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card rounded">
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <div class="ml-2">
                    <p>MIPA X-MIPA-2_MIPA Fisika	</p>
                    <p class="tx-11 text-muted">Mata Pelajaran MIPA Fisika Kelas Kelas X</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <p class="mb-3 tx-14">36 Siswa | Max KD : 9 | KKM : 75</p>
            </div>
            <div class="card-footer">
              <div class="d-flex post-actions">
                <a href="javascript:;" class="d-flex align-items-center text-muted">
                  <i class="icon-md" data-feather="inbox"></i>
                  <p class="d-none d-md-block ml-2">Masuk</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- middle wrapper end -->
  </div>
</div>
@endsection