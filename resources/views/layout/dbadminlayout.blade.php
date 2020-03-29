{{-- main layout for the admin dashboard  --}}
<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.partials.head')
</head>

<body>
  @include('layout.partials.admin')
  {{-- @include('layout.partials.header') --}}
  @yield('content')
  @include('layout.partials.footer')
  @include('layout.partials.footer-scripts')
</body>

</html>