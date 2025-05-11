@php
    $navbarVertical = isset($navbarVertical) ? $navbarVertical : false;
@endphp
<a class="navbar-brand me-1 me-sm-3" href={{ route('superadmin.dashboard.home') }}>
  <div class="d-flex align-items-center {{ $navbarVertical ? 'py-3' : ''}}">
    <!-- <img class="me-2" src="" alt="" width="40" /> -->
    <span class="font-sans-serif text-primary">Reservations</span>
  </div>
</a>