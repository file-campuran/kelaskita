<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Noble<span>UI</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Teacher</li>
      <li class="nav-item {{ active_class(['teacher/matapelajaran']) }}">
        <a href="{{ url('/teacher/matapelajaran') }}" class="nav-link">
          <i class="link-icon" data-feather="book"></i>
          <span class="link-title">Mata Pelajaran</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['teacher/materi']) }}">
        <a href="{{ url('/teacher/materi') }}" class="nav-link">
          <i class="link-icon" data-feather="book-open"></i>
          <span class="link-title">Materi</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['teacher/absen']) }}">
        <a href="{{ url('/teacher/absen') }}" class="nav-link">
          <i class="link-icon" data-feather="activity"></i>
          <span class="link-title">Absen</span>
        </a>
      </li>
    </ul>
  </div>
</nav>