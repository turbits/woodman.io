<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
</head>
  <body>
    @include('partials._nav')

    <!-- insert content -->
    <div class="container">
      @include('partials._messages')

      @yield('content')
    </div>

    @include('partials._footer')

    <!-- scripts -->
    @include('partials._scripts')

    @yield('scripts')
  </body>
</html>
